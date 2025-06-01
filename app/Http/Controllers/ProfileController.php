<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        // Temporary: Allow access without authentication for testing
        $user = Auth::user() ?? (object)[
            'name' => 'Demo User',
            'email' => 'demo@tetengerbumi.org',
            'phone' => '08123456789',
        ];
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
        // For testing without authentication
        if (!Auth::check()) {
            // Return success even if no user is logged in
            return response()->json([
                'message' => 'Profile updated successfully (demo mode)',
                'data' => $request->all()
            ]);
        }
        
        // Normal flow for authenticated users
        $user = Auth::user();
        $user->name = $request->input('name', $user->name);
        $user->email = $request->input('email', $user->email);
        $user->phone = $request->input('phone', $user->phone);
        // Handle photo upload if present
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('profile-photos', 'public');
            $user->photo = $path;
        }
        
        $user->save();

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => [
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                'photo' => $user->photo ? asset('storage/' . $user->photo) : null
            ]
        ]);
    }
    
    /**
     * Update user's profile photo
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updatePhoto(Request $request)
    {
        // Log detail request untuk debugging
        \Log::info('Update Photo Request:', [
            'content_type' => $request->header('Content-Type'),
            'has_file' => $request->hasFile('photo'),
            'all_files' => $request->allFiles(),
            'all_inputs' => $request->all(),
            'user_authenticated' => Auth::check()
        ]);

        try {
            // Validasi request
            $request->validate([
                'photo' => 'required|image|max:2048', // 2MB Max
            ]);
            
            // Untuk mode demo jika tidak ada autentikasi
            if (!Auth::check()) {
                \Log::info('Demo mode activated - pengguna tidak terotentikasi');
                return response()->json([
                    'success' => false,
                    'message' => 'Demo mode: Photo would be uploaded if authenticated',
                    'photo_url' => asset('images/default-avatar.png')
                ]);
            }
            
            $user = Auth::user();
            \Log::info('User authenticated:', ['id' => $user->id, 'name' => $user->name]);
            
            // Pastikan direktori storage ada
            $storagePath = storage_path('app/public/profile_photos');
            if (!file_exists($storagePath)) {
                \Log::info('Creating directory:', ['path' => $storagePath]);
                mkdir($storagePath, 0755, true);
            }
            
            // Hapus foto lama jika ada
            if ($user->profile_photo) {
                \Log::info('Deleting old photo:', ['path' => $user->profile_photo]);
                try {
                    Storage::disk('public')->delete($user->profile_photo);
                } catch (\Exception $e) {
                    \Log::warning('Failed to delete old photo:', ['error' => $e->getMessage()]);
                }
            }
            
            // Simpan foto baru dengan error handling yang lebih baik
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                \Log::info('File details:', [
                    'name' => $file->getClientOriginalName(),
                    'size' => $file->getSize(),
                    'mime' => $file->getMimeType(),
                    'extension' => $file->extension(),
                    'error_code' => $file->getError()
                ]);
                
                try {
                    // Pastikan direktori profile_photos ada
                    $publicPath = public_path('storage/profile_photos');
                    if (!file_exists($publicPath)) {
                        mkdir($publicPath, 0755, true);
                        \Log::info('Created directory:', ['path' => $publicPath]);
                    }
                    
                    // Simpan foto dengan nama file yang unik
                    $fileName = time() . '_' . md5($file->getClientOriginalName()) . '.' . $file->extension();
                    $path = 'profile_photos/' . $fileName;
                    
                    // Simpan file ke storage publik
                    Storage::disk('public')->put($path, file_get_contents($file));
                    \Log::info('File stored with direct method at:', ['path' => $path]);
                    
                    // Update model user dengan path foto baru
                    $user->profile_photo = $path;
                    $user->save();
                    \Log::info('User profile updated with new photo path');
                    
                    // Refresh user untuk mendapatkan accessor terbaru
                    $user = $user->fresh();
                    
                    // Gunakan accessor untuk URL foto
                    $photoUrl = $user->profile_photo_url;
                    \Log::info('Returning success response with photo URL:', ['url' => $photoUrl]);
                    
                    return response()->json([
                        'success' => true,
                        'message' => 'Profile photo updated successfully',
                        'photo_url' => $photoUrl,
                        'profile_photo_url' => $photoUrl,
                        'path' => $path
                    ]);
                } catch (\Exception $e) {
                    \Log::error('Error saving file:', ['error' => $e->getMessage()]);
                    throw new \Exception('Error saving file: ' . $e->getMessage());
                }
            }
            
            \Log::warning('No photo file in request');
            return response()->json([
                'success' => false,
                'message' => 'No photo file provided in the request'
            ], 400);
            
        } catch (\Exception $e) {
            \Log::error('Exception in updatePhoto:', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Failed to update profile photo',
                'error' => $e->getMessage(),
                'error_details' => [
                    'file' => $e->getFile(),
                    'line' => $e->getLine()
                ]
            ], 500);
        }
    }

}
