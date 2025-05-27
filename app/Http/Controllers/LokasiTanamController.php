<?php

namespace App\Http\Controllers;

use App\Models\LokasiTanam;
use Illuminate\Http\Request;

class LokasiTanamController extends Controller
{
    public function index()
    {
        return response()->json(LokasiTanam::with('programKerja')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'program_kerja_id' => 'required|exists:program_kerjas,id',
            'nama_tempat' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'status' => 'in:tersedia,penuh,selesai'
        ]);

        $lokasi = LokasiTanam::create($validated);

        return response()->json([
            'message' => 'Lokasi tanam berhasil ditambahkan',
            'data' => $lokasi
        ], 201);
    }

    public function show($id)
    {
        return response()->json(LokasiTanam::with('programKerja')->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $lokasi = LokasiTanam::findOrFail($id);
        $lokasi->update($request->all());

        return response()->json([
            'message' => 'Lokasi tanam berhasil diperbarui',
            'data' => $lokasi
        ]);
    }

    public function destroy($id)
    {
        $lokasi = LokasiTanam::findOrFail($id);
        $lokasi->delete();

        return response()->json(['message' => 'Lokasi tanam berhasil dihapus']);
    }
}
