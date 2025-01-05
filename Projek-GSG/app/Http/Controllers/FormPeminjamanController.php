<?php

namespace App\Http\Controllers;
use app\Models\Peminjaman;
use App\Http\Requests\StorepeminjamanRequest;
// use App\Models\FormPeminjaman;
use App\Http\Requests\StoreFormPeminjamanRequest;
use App\Http\Requests\UpdateFormPeminjamanRequest;

class FormPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Pengguna.FormPeminjaman_index');
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
        $requestData = $request->validate([ 
            'peminjaman_id' => 'required',    
            'user_id' => 'required',
            'tanggal_peminjaman' => 'required|date',
            'tanggal_pengembalian' => 'required|date',
            'metode_pembayaran' => 'required|in:Tunai,Non_Tunai',
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'status_pembayaran' => 'required|in:Sukses,Gagal,Menunggu',
            'status_verifikasi' => 'required|in:Tertunda,Disetujui,Ditolak',
            'tujuan_peminjaman' => 'required',
            'nomor_hp' => 'required',
            'pesan' => 'required',
        ]);


        $peminjaman = new Peminjaman(); // Membuat objek kosong untuk model Pembayaran
        $peminjaman->fill($requestData); // Mengisi model dengan data yang sudah divalidasi

        // Jika file image diunggah, simpan file dan tambahkan path-nya ke kolom image
        if ($request->hasFile('image')) {
            $peminjaman->image = $request->file('image')->store('public/images');
        }

        $peminjaman->save(); // Menyimpan data ke database

        if ($request->wantsJson()) {
            return response()->json($peminjaman);
        }

        return back()->with('pesan', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    // public function show(FormPeminjaman $formPeminjaman)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(FormPeminjaman $formPeminjaman)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdateFormPeminjamanRequest $request, FormPeminjaman $formPeminjaman)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(FormPeminjaman $formPeminjaman)
    // {
    //     //
    // }
}
