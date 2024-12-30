<?php

namespace App\Http\Controllers;
 
use Illuminate\View\View;

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
    return view('admin.admin_index', [
        'layout' => 'layouts.layouts_admin'
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