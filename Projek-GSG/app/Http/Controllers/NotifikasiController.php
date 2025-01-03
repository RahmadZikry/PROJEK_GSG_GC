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
        // return view ('Admin.notifikasi_create', $data);
        return view('Admin.notifikasi_create');
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
        return view('admin.notofikasi_show', compact('notifikasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notifikasi $notifikasi)
    {
        return view('admin.notifikasi_edit', [
            'layout' => 'layouts.layouts_admin',
            'notifikasi' => $notifikasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'notifikasi_id' => 'required|unique:notifikasi,notifikasi_id,'.$id,
            'user_id' => 'required',
            'judul_notifikasi' => 'required',
            'isi_notifikasi'=> 'required',
            'tanggal_kirim' => 'required',
            'status_baca' => 'required|in:Dibaca,Belum Dibaca',
        ]);

        // Perbarui data fasilitas
        $notifikasi = Notifikasi::findOrFail($id);
        $notifikasi->fill($validatedData);
        $notifikasi->save();
        // Tambahkan pesan sukses
        Session::flash('success', 'Data notifikasi berhasil diperbarui.');

        // Redirect ke halaman index
        // return redirect()->route('notifikasi.index');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notifikasi = Notifikasi::findOrFail($id);
        // Hapus data fasilitas
        $notifikasi->delete();

        // Tambahkan pesan sukses
        Session::flash('success', 'Data notifikasi berhasil dihapus.')->success();

        // Redirect kembali ke halaman sebelumnya
        // return redirect()->route('notifikasi.index');
        return back();
    }
}
