<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Http\Requests\StorepeminjamanRequest;
use Illuminate\Support\Facades\Auth;
// use App\Models\FormPeminjaman;

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
        return view('Pengguna.FormPeminjaman_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepeminjamanRequest $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'tanggal_peminjaman' => 'required|date',
            'tanggal_pengembalian' => 'required|date|after:tanggal_peminjaman',
            'metode_pembayaran' => 'required|in:Tunai,Non_Tunai',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tujuan_peminjaman' => 'required|string|max:255',
            'nomor_hp' => 'required|string|min:10|max:13',
            'pesan' => 'nullable|string|max:500',
        ]);

        // Upload gambar
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/bukti_pembayaran');
            $validatedData['image'] = str_replace('public/', '', $path);
        }

        // Tambahkan data tambahan
        $validatedData['user_id'] = Auth::id();
        $validatedData['status_verifikasi'] = 'Tertunda';
        $validatedData['status_pembayaran'] = 'Menunggu';

        // Simpan ke database
        Peminjaman::create($validatedData);

        // Kembalikan respons
        return redirect()->back()->with('success', 'Peminjaman berhasil diajukan!');
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