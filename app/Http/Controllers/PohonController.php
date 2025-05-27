<?php

namespace App\Http\Controllers;

use App\Models\Pohon;
use Illuminate\Http\Request;

class PohonController extends Controller
{
    public function index()
    {
        return response()->json(Pohon::with('lokasiTanam')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'lokasi_tanam_id' => 'required|exists:lokasi_tanams,id',
            'nama_pohon' => 'required|string|max:255',
            'jenis' => 'nullable|string|max:100',
            'tinggi' => 'nullable|numeric',
            'tanggal_tanam' => 'required|date',
            'status' => 'in:hidup,mati'
        ]);

        $pohon = Pohon::create($validated);

        return response()->json([
            'message' => 'Data pohon berhasil ditambahkan',
            'data' => $pohon
        ], 201);
    }

    public function show($id)
    {
        return response()->json(Pohon::with('lokasiTanam')->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $pohon = Pohon::findOrFail($id);
        $pohon->update($request->all());

        return response()->json([
            'message' => 'Data pohon berhasil diperbarui',
            'data' => $pohon
        ]);
    }

    public function destroy($id)
    {
        $pohon = Pohon::findOrFail($id);
        $pohon->delete();

        return response()->json(['message' => 'Data pohon berhasil dihapus']);
    }
}
