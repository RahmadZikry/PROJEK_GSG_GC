<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\User;

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
    public function index(): View
    {
        return view('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        // Hitung total akun berdasarkan tipe pengguna
        $totalPengguna = User::where('type', 0)->count(); // Asumsi 'type' 0 untuk pelamar
        $totalKeuangan = User::where('type', 2)->count(); // Asumsi 'type' 2 untuk perusahaan
        $totalAdmin = User::where('type', 1)->count(); // Asumsi 'type' 1 untuk admin/keuangan/email

        return view('admin.admin_index', [
            'layout' => 'layouts.layouts_admin',
            'totalPengguna' => $totalPengguna,
            'totalAdmin' => $totalAdmin,
            'totalKeungan' => $totalKeuangan,
        ]);
    }


    public function penggunaHome(): View
    {
        return view('Pengguna.pengguna_index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function keuanganHome(): View
    {
        return view('Keuangan.keuangan_index');
    }
}