<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Foundation\Auth\User;
use App\Http\Requests\StoreNotifikasiRequest;
use App\Http\Requests\UpdateNotifikasiRequest;

class NotifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifikasi['notifikasi'] = Notifikasi::latest()->paginate(10);
        return view('Admin.notifikasi_index', $notifikasi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['ListUser'] = User::orderBy('nama', 'asc')->get();
        return view ('Admin.notifikasi_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotifikasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Notifikasi $notifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notifikasi $notifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotifikasiRequest $request, Notifikasi $notifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notifikasi $notifikasi)
    {
        //
    }
}
