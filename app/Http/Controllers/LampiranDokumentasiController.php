<?php

namespace App\Http\Controllers;

use App\Models\LampiranDokumentasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LampiranDokumentasiController extends Controller
{
    public function index()
    {
        return response()->json(LampiranDokumentasi::with('laporanKegiatan')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'laporan_kegiatan_id' => 'required|exists:laporan_kegiatans,id',
            'file' => 'required|file|max:2048'
        ]);

        $file = $request->file('file');
        $path = $file->store('dokumentasi', 'public');

        $lampiran = LampiranDokumentasi::create([
            'laporan_kegiatan_id' => $request->laporan_kegiatan_id,
            'nama_file' => $file->getClientOriginalName(),
            'path' => $path,
            'tipe_file' => $file->getClientMimeType()
        ]);

        return response()->json([
            'message' => 'Lampiran berhasil diunggah',
            'data' => $lampiran
        ], 201);
    }

    public function show($id)
    {
        return response()->json(LampiranDokumentasi::with('laporanKegiatan')->findOrFail($id));
    }

    public function destroy($id)
    {
        $lampiran = LampiranDokumentasi::findOrFail($id);
        Storage::disk('public')->delete($lampiran->path);
        $lampiran->delete();

        return response()->json(['message' => 'Lampiran berhasil dihapus']);
    }
}
