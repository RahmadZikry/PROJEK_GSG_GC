<?php

namespace App\Http\Controllers;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Pengguna.pesan_index');
    }
}