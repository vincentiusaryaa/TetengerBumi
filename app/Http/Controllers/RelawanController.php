<?php

namespace App\Http\Controllers;

use App\Models\Relawan;
use Illuminate\Http\Request;

class RelawanController extends Controller
{
    public function index()
    {
        return response()->json(Relawan::with('user')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'bidang' => 'required|string|max:100',
            'alasan' => 'nullable|string',
            'status' => 'in:aktif,nonaktif,menunggu'
        ]);

        $relawan = Relawan::create($validated);

        return response()->json([
            'message' => 'Relawan berhasil didaftarkan',
            'data' => $relawan
        ], 201);
    }

    public function show($id)
    {
        return response()->json(Relawan::with('user')->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $relawan = Relawan::findOrFail($id);
        $relawan->update($request->all());

        return response()->json([
            'message' => 'Data relawan berhasil diperbarui',
            'data' => $relawan
        ]);
    }

    public function destroy($id)
    {
        $relawan = Relawan::findOrFail($id);
        $relawan->delete();

        return response()->json(['message' => 'Relawan berhasil dihapus']);
    }
}
