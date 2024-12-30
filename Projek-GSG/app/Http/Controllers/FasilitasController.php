<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFasilitasRequest;
use App\Http\Requests\UpdateFasilitasRequest;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasilitas = Fasilitas::latest()->paginate(10);
        return view('Admin.fasilitas_index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.fasilitas_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'nama_fasilitas' => 'required',
            'deskripsi'=>'required',
            'harga_sewa'=>'required',
            'status_ketersediaan'=>'required',
        ]);
        $fasilitas = new Fasilitas();
        $fasilitas -> fill($requestData);
        $fasilitas->save();

        flash('Data berhasil disimpan')->success();

        return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFasilitasRequest $request, Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $fasilitas = Fasilitas::findOrfail($id);

        $fasilitas->delete();
        flash('Data sudah dihapus')->success();
        return back();
    }
}