<?php

namespace App\Http\Controllers;

use App\Models\PartisipasiProgram;
use Illuminate\Http\Request;

class PartisipasiProgramController extends Controller
{
    public function index()
    {
        return response()->json(PartisipasiProgram::with(['user', 'programKerja'])->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'program_kerja_id' => 'required|exists:program_kerjas,id',
            'kontribusi' => 'required|string',
            'tanggal_partisipasi' => 'required|date'
        ]);

        $partisipasi = PartisipasiProgram::create($validated);

        return response()->json([
            'message' => 'Partisipasi berhasil ditambahkan',
            'data' => $partisipasi
        ], 201);
    }

    public function show($id)
    {
        return response()->json(PartisipasiProgram::with(['user', 'programKerja'])->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $partisipasi = PartisipasiProgram::findOrFail($id);
        $partisipasi->update($request->all());

        return response()->json([
            'message' => 'Partisipasi berhasil diperbarui',
            'data' => $partisipasi
        ]);
    }

    public function destroy($id)
    {
        $partisipasi = PartisipasiProgram::findOrFail($id);
        $partisipasi->delete();

        return response()->json(['message' => 'Partisipasi berhasil dihapus']);
    }
}
