<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Http\Requests\StorePembayaranRequest;
use App\Http\Requests\UpdatePembayaranRequest;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = Pembayaran::latest()->paginate(10);
        if (request()->wantsJson()){
            return response()->json($pembayaran);
        }
        $data['pembayaran'] = $pembayaran;
        return view('Admin.pembayaran_index', $data);
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
    public function store(StorePembayaranRequest $request)
    {
        $requestData = $request->validate([
            'peminjaman_id' => 'required',
            'user_id' => 'required',
            'tanggal_pembayaran' => 'required',
            'jumlah_pembayaran'=> 'required',
            'status_pembayaran' => 'required|in:Dikonfirmasi,Menunggu',
            'metode_pembayaran' => 'required',
        ]);
        $pembayaran = new Pembayaran(); //membuat objek kosong di variabel model
        $pembayaran->fill($requestData); //mengisi var model dengan data yang sudah divalidasi requestData
        $pembayaran->save(); //menyimpan data ke database
        return back()->with('pesan', 'Data berhasil disimpan');
        if (request()->wantsJson()){
            return response()->json($pembayaran);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePembayaranRequest $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembayaran = Fasilitas::findOrFail($id);
        // Hapus data fasilitas
        $pembayaran->delete();

        // Tambahkan pesan sukses
        Session::flash('success', 'Data pembayaran berhasil dihapus.')->success();

        // Redirect kembali ke halaman sebelumnya
        // return redirect()->route('pembayaran.index');
        return back();
    }
}
