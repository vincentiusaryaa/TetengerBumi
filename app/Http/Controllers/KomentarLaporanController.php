<?php

namespace App\Http\Controllers;

use App\Models\KomentarLaporan;
use Illuminate\Http\Request;

class KomentarLaporanController extends Controller
{
    public function index()
    {
        return response()->json(KomentarLaporan::with(['user', 'laporanKegiatan'])->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'laporan_kegiatan_id' => 'required|exists:laporan_kegiatans,id',
            'isi_komentar' => 'required|string'
        ]);

        $komentar = KomentarLaporan::create($validated);

        return response()->json([
            'message' => 'Komentar berhasil ditambahkan',
            'data' => $komentar
        ], 201);
    }

    public function show($id)
    {
        return response()->json(KomentarLaporan::with(['user', 'laporanKegiatan'])->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $komentar = KomentarLaporan::findOrFail($id);
        $komentar->update($request->all());

        return response()->json([
            'message' => 'Komentar berhasil diperbarui',
            'data' => $komentar
        ]);
    }

    public function destroy($id)
    {
        $komentar = KomentarLaporan::findOrFail($id);
        $komentar->delete();

        return response()->json(['message' => 'Komentar berhasil dihapus']);
    }
}
