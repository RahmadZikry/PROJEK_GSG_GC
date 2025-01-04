<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use App\Http\Requests\StorepeminjamanRequest;
use App\Http\Requests\UpdatepeminjamanRequest;
use Illuminate\Support\Facades\Storage;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = Peminjaman::latest()->paginate(10);
        if (request()->wantsJson()){
            return response()->json($peminjaman);
        }
        $data['peminjaman'] = $peminjaman;
        return view('admin.peminjaman_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.peminjaman_create', [
            'layout' => 'layouts.layouts_admin',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepeminjamanRequest $request)
    {
        $requestData = $request->validate([
            'fasilitas_id' => 'required',
            'user_id' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian'=> 'required',
            'metode_perbayaran' => 'required|in:Tunai,Non_Tunai',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        // Set status_verifikasi langsung bernilai 'Tertunda'
        $requestData['status_verifikasi'] = 'Tertunda';
        $peminjaman = new Peminjaman(); // membuat objek kosong di variabel model
        $peminjaman->fill($requestData); // mengisi var model dengan data yang sudah divalidasi requestData
        $peminjaman->image = $request->file('image')->store('public');
        $peminjaman->save(); // menyimpan data ke database

        if ($request->wantsJson()) {
            return response()->json($peminjaman);
        }

        return back()->with('pesan', 'Data berhasil disimpan');
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
        return view('admin.peminjaman_edit', [
            'layout' => 'layouts.layouts_admin',
            'peminjaman' => $peminjaman
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepeminjamanRequest $request, peminjaman $peminjaman)
    {
        $requestData = $request->validate([
            'fasilitas_id' => 'required',
            'user_id' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian'=> 'required',
            'metode_perbayaran' => 'required|in:Tunai,Non_Tunai',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        // Temukan data peminjaman berdasarkan ID
        $peminjaman = Peminjaman::findOrFail($peminjaman);

        // Set status_verifikasi tetap bernilai 'Tertunda' jika tidak diubah
        $requestData['status_verifikasi'] = $peminjaman->status_verifikasi ?? 'Tertunda';

        // Jika ada file bukti_pembayaran baru, ganti file lama
        if ($request->hasFile('image')) {
            // Hapus file lama jika ada
            if ($peminjaman->bukti_pembayaran) {
                Storage::delete($peminjaman->bukti_pembayaran);
            }
            $requestData['image'] = $request->file('image')->store('public');
        }

        // Update data peminjaman dengan requestData
        $peminjaman->update($requestData);

        if ($request->wantsJson()) {
            return response()->json($peminjaman);
        }

        return back()->with('pesan', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peminjaman $peminjaman)
    {
        //
    }
}