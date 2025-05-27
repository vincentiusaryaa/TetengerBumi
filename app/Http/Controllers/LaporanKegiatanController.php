<?php

namespace App\Http\Controllers;

use App\Models\LaporanKegiatan;
use Illuminate\Http\Request;

class LaporanKegiatanController extends Controller
{
    public function index()
    {
        return response()->json(LaporanKegiatan::with('programKerja')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'program_kerja_id' => 'required|exists:program_kerjas,id',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_kegiatan' => 'required|date',
            'lokasi' => 'nullable|string|max:255',
            'dokumentasi_url' => 'nullable|url'
        ]);

        $laporan = LaporanKegiatan::create($validated);

        return response()->json([
            'message' => 'Laporan kegiatan berhasil ditambahkan',
            'data' => $laporan
        ], 201);
    }

    public function show($id)
    {
        return response()->json(LaporanKegiatan::with('programKerja')->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $laporan = LaporanKegiatan::findOrFail($id);
        $laporan->update($request->all());

        return response()->json([
            'message' => 'Laporan kegiatan berhasil diperbarui',
            'data' => $laporan
        ]);
    }

    public function destroy($id)
    {
        $laporan = LaporanKegiatan::findOrFail($id);
        $laporan->delete();

        return response()->json(['message' => 'Laporan kegiatan berhasil dihapus']);
    }
}
