<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request): RedirectResponse
{
    // Validasi input login
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    // Proses login
    if (Auth::attempt($request->only('email', 'password'))) {
        $user = Auth::user();
        $role = $user->type; // Ambil tipe pengguna

        // Simpan role ke session
        session(['role' => $role]);

        // Redirect ke halaman sesuai role
        if ($role == 'admin') {
            return redirect()->route('admin.home');
        } elseif ($role == 'pengguna') {
            return redirect()->route('pengguna.home');
        } elseif ($role == 'keuangan') {
            return redirect()->route('keuangan.home');
        } else {
            return redirect()->route('home');
        }
    }

    // Jika login gagal
    return redirect()->route('login')->withErrors([
        'email' => 'Email atau password salah.',
    ]);
    }
}