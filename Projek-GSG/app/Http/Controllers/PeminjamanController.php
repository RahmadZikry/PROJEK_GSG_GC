<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use App\Http\Requests\StorepeminjamanRequest;
use App\Http\Requests\UpdatepeminjamanRequest;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman['peminjaman'] = peminjaman::latest()->paginate(10);
        return view('Admin.peminjaman_index', $peminjaman);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepeminjamanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepeminjamanRequest $request, peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peminjaman $peminjaman)
    {
        //
    }
}
