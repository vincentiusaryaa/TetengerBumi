<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = Auth::user();
        // Dummy data jika relasi belum ada
        return response()->json([
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone ?? '',
            'photo' => $user->photo_url ?? '',
            'programs' => $user->programs ?? [
                ['name' => 'Wali Pohon'],
                ['name' => 'Wakaf Pohon'],
                ['name' => 'Charity Trees Planting'],
            ],
            'donations' => $user->donations ?? [
    ['date' => '2025-05-01', 'amount' => 100000],
    ['date' => '2025-05-10', 'amount' => 50000],
],
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name', $user->name);
        $user->email = $request->input('email', $user->email);
        $user->phone = $request->input('phone', $user->phone);
        // Tambahkan update photo jika diperlukan
        $user->save();

        return response()->json(['message' => 'Profile updated successfully']);
    }
}
