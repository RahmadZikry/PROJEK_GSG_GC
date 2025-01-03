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
        $peminjaman = Peminjaman::latest()->paginate(10);
        if (request()->wantsJson()){
            return response()->json($peminjaman);
        }
        $data['peminjaman'] = $peminjaman;
        return view('Admin.peminjaman_index', $data);
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
            'fasilitas_id' => 'required',
            'user_id' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian'=> 'required',
            'status_verifikasi' => 'required|in:Tertunda,Disetujui,Ditolak',
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);
        $peminjaman = new Peminjaman(); //membuat objek kosong di variabel model
        $peminjaman->fill($requestData); //mengisi var model dengan data yang sudah divalidasi requestData
        $peminjaman->bukti_pembayaran = $request ->file('bukti_pembayaran')->store('public');
        $peminjaman->save(); //menyimpan data ke database
        return back()->with('pesan', 'Data berhasil disimpan');
        if (request()->wantsJson()){
            return response()->json($peminjaman);
        }
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
    public function destroy(string $id)
    {
        $peminjaman = Fasilitas::findOrFail($id);
        // Hapus data fasilitas
        $peminjaman->delete();

        // Tambahkan pesan sukses
        Session::flash('success', 'Data peminjaman berhasil dihapus.')->success();

        // Redirect kembali ke halaman sebelumnya
        // return redirect()->route('peminjaman.index');
        return back();
    }
}
