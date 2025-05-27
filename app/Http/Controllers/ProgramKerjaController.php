<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramKerja;

class ProgramKerjaController extends Controller
{
    public function index()
    {
        return ProgramKerja::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_program' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jadwal' => 'required|date',
            'status' => 'required|in:aktif,selesai',
        ]);

        return ProgramKerja::create($validated);
    }

    public function update(Request $request, $id)
    {
        $program = ProgramKerja::findOrFail($id);

        $validated = $request->validate([
            'nama_program' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jadwal' => 'required|date',
            'status' => 'required|in:aktif,selesai',
        ]);

        $program->update($validated);

        return $program;
    }

    public function destroy($id)
    {
        $program = ProgramKerja::findOrFail($id);
        $program->delete();

        return response()->json(['message' => 'Program kerja berhasil dihapus']);
    }
}
