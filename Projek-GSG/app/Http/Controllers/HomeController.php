<?php

namespace App\Http\Controllers;

use App\Models\kalender;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request): View
    {
        $role = session('role'); // Ambil role dari session

        // Tentukan tampilan berdasarkan role pengguna
        if ($role == 'admin') {
            $totalPengguna = User::where('type', 0)->count(); // Tipe pelamar
            $totalKeuangan = User::where('type', 2)->count(); // Tipe perusahaan
            $totalAdmin = User::where('type', 1)->count(); // Tipe admin/keuangan

            return view('admin.admin_index', [
                'layout' => 'layouts.layouts_admin',
                'totalPengguna' => $totalPengguna,
                'totalAdmin' => $totalAdmin,
                'totalKeungan' => $totalKeuangan,
            ]);
        } elseif ($role == 'pengguna') {
            $peminjaman = Peminjaman::all();
            return view('pengguna.pengguna_index', compact('peminjaman'));
        } elseif ($role == 'keuangan') {
            return view('Keuangan.keuangan_index');
        } else {
            // Jika role tidak dikenal, arahkan ke halaman default
            return view('welcome');
        }
    }
}