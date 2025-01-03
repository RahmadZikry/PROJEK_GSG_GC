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
        if (request()->wantsJson()){
            return response()->json($fasilitas);
        }
        $data['fasilitas'] = $fasilitas;
        return view('Admin.fasilitas_index', $data);

    // $fasilitas = Fasilitas::latest()->paginate(10);
    // return view('admin.fasilitas_index', [
    //     'layout' => 'layouts.layouts_admin',
    //     'fasilitas' => $fasilitas
    // ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Admin.fasilitas_create');

    // return view('admin.fasilitas_create', [
    //     'layout' => 'layouts.layouts_admin',
    // ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'fasilitas_id' => 'required',
            'nama_fasilitas' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'harga_sewa' => 'required|numeric|min:0',
            'status_ketersediaan' => 'required|in:Tersedia,Tidak Tersedia',
        ]);

        // Buat data fasilitas baru
        // Fasilitas::create($validatedData);

        // // Tambahkan pesan sukses
        // Session::flash('success', 'Data fasilitas berhasil disimpan.');

        // // Redirect ke halaman index
        // return redirect()->route('fasilitas.index');

        $fasilitas = new Fasilitas(); //membuat objek kosong di variabel model
        $fasilitas->fill($validatedData); //mengisi var model dengan data yang sudah divalidasi requestData
        $fasilitas->save(); //menyimpan data ke database
        return back()->with('pesan', 'Data berhasil disimpan');
        if (request()->wantsJson()){
            return response()->json($fasilitas);
        }
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
    public function update(Request $request, string $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'fasilitas_id' => 'required|unique:fasilitas,fasilitas_id,'.$id,
            'nama_fasilitas' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'harga_sewa' => 'required|numeric|min:0',
            'status_ketersediaan' => 'required|boolean',
        ]);

        // Perbarui data fasilitas
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->fill($validatedData);
        $fasilitas->save();
        // Tambahkan pesan sukses
        Session::flash('success', 'Data fasilitas berhasil diperbarui.');

        // Redirect ke halaman index
        // return redirect()->route('fasilitas.index');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        // Hapus data fasilitas
        $fasilitas->delete();

        // Tambahkan pesan sukses
        Session::flash('success', 'Data fasilitas berhasil dihapus.');

        // Redirect kembali ke halaman sebelumnya
        return redirect()->route('fasilitas.index');
        // return back();
    }
}
