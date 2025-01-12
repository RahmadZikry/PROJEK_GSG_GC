<?php

namespace App\Http\Controllers;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Pengguna.profil_index');
    }
}