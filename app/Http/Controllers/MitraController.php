<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        return response()->json(Mitra::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_mitra' => 'required|string|max:255',
            'kontak_person' => 'nullable|string|max:255',
            'email' => 'nullable|email',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
            'kategori' => 'nullable|string'
        ]);

        $mitra = Mitra::create($validated);

        return response()->json([
            'message' => 'Mitra berhasil ditambahkan',
            'data' => $mitra
        ], 201);
    }

    public function show($id)
    {
        return response()->json(Mitra::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $mitra = Mitra::findOrFail($id);
        $mitra->update($request->all());

        return response()->json([
            'message' => 'Mitra berhasil diperbarui',
            'data' => $mitra
        ]);
    }

    public function destroy($id)
    {
        $mitra = Mitra::findOrFail($id);
        $mitra->delete();

        return response()->json(['message' => 'Mitra berhasil dihapus']);
    }
}
