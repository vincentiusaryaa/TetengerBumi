<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProgramKerja;
use App\Models\LokasiTanam;
use App\Models\Relawan;
use App\Models\Pohon;
use App\Models\Donasi;
use Inertia\Inertia; 

class DashboardController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('Admin/Dashboard', [
            'statistik' => [
                'program_kerja' => ProgramKerja::count(),
                'lokasi_tanam' => LokasiTanam::count(),
                'relawan' => Relawan::count(),
                'pohon' => Pohon::count(),
            ]
        ]);
    }

    public function statistics(): \Illuminate\Http\JsonResponse
    {
        $totalProgram = ProgramKerja::count();
        $totalLokasi = LokasiTanam::count();
        $totalRelawan = Relawan::count();
        $totalPohon = Pohon::count();
        $totalDonasi = 0;
        if (class_exists('\App\Models\Donasi')) {
            $totalDonasi = Donasi::sum('jumlah');
        }

        $monthlyProgram = ProgramKerja::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->get();

        return response()->json([
            'total_program' => $totalProgram,
            'total_lokasi' => $totalLokasi,
            'total_relawan' => $totalRelawan,
            'total_pohon' => $totalPohon,
            'total_donasi' => $totalDonasi,
            'monthly_program' => $monthlyProgram
        ]);
    }
}
