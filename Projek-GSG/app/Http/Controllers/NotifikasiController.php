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
        // $data['ListUser'] = User::orderBy('nama', 'asc')->get();
        return view ('Admin.notifikasi_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotifikasiRequest $request)
    {
        $requestData = $request->validate([
            'notifikasi_id' => 'required',
            'user_id' => 'required',
            'judul_notifikasi' => 'required',
            'isi_notifikasi'=> 'required',
            'tanggal_kirim' => 'required',
            'status_baca' => 'required|in:Dibaca,Belum Dibaca',
        ]);
        $notifikasi = new Notifikasi(); //membuat objek kosong di variabel model
        $notifikasi->fill($requestData); //mengisi var model dengan data yang sudah divalidasi requestData
        $notifikasi->save(); //menyimpan data ke database
        return back()->with('pesan', 'Data berhasil disimpan');
        if (request()->wantsJson()){
            return response()->json($notifikasi);
        }
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
