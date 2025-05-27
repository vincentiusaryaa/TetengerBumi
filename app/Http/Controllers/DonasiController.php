<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index()
    {
        return response()->json(Donasi::with('user')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'jumlah' => 'required|numeric|min:1',
            'metode_pembayaran' => 'required|string|max:50',
            'tanggal_donasi' => 'required|date',
            'catatan' => 'nullable|string'
        ]);

        $donasi = Donasi::create($validated);

        return response()->json([
            'message' => 'Donasi berhasil dicatat',
            'data' => $donasi
        ], 201);
    }

    public function show($id)
    {
        return response()->json(Donasi::with('user')->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $donasi = Donasi::findOrFail($id);
        $donasi->update($request->all());

        return response()->json([
            'message' => 'Data donasi berhasil diperbarui',
            'data' => $donasi
        ]);
    }

    public function destroy($id)
    {
        $donasi = Donasi::findOrFail($id);
        $donasi->delete();

        return response()->json(['message' => 'Data donasi berhasil dihapus']);
    }
}
