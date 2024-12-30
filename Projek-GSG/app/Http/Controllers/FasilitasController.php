<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $fasilitas = Fasilitas::latest()->paginate(10);
    return view('admin.fasilitas_index', [
        'layout' => 'layouts.layouts_admin',
        'fasilitas' => $fasilitas
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('admin.fasilitas_create', [
        'layout' => 'layouts.layouts_admin',
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_fasilitas' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'harga_sewa' => 'required|numeric|min:0',
            'status_ketersediaan' => 'required|boolean',
        ]);

        // Buat data fasilitas baru
        Fasilitas::create($validatedData);

        // Tambahkan pesan sukses
        Session::flash('success', 'Data fasilitas berhasil disimpan.');

        // Redirect ke halaman index
        return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fasilitas $fasilitas)
    {
        // Tampilkan detail fasilitas jika diperlukan
        return view('admin.fasilitas_show', compact('fasilitas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fasilitas $fasilitas)
    {
    return view('admin.fasilitas_edit', [
        'layout' => 'layouts.layouts_admin',
        'fasilitas' => $fasilitas
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fasilitas $fasilitas)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_fasilitas' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'harga_sewa' => 'required|numeric|min:0',
            'status_ketersediaan' => 'required|boolean',
        ]);

        // Perbarui data fasilitas
        $fasilitas->update($validatedData);

        // Tambahkan pesan sukses
        Session::flash('success', 'Data fasilitas berhasil diperbarui.');

        // Redirect ke halaman index
        return redirect()->route('fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fasilitas $fasilitas)
    {
        // Hapus data fasilitas
        $fasilitas->delete();

        // Tambahkan pesan sukses
        Session::flash('success', 'Data fasilitas berhasil dihapus.');

        // Redirect kembali ke halaman sebelumnya
        return redirect()->route('fasilitas.index');
    }
}
