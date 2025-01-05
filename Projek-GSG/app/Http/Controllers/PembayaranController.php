<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Http\Requests\StorePembayaranRequest;
use App\Http\Requests\UpdatePembayaranRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pembayaran = Pembayaran::whereIn('status_pembayaran', ['Menunggu'])->latest()->paginate(10);

        if ($request->wantsJson()) {
            return response()->json($pembayaran);
        }

        return view('keuangan.pembayaran_index', ['pembayaran' => $pembayaran]);
    }

    /**
     * Display a listing of data pembayaran (alternative route).
     */
    public function dataIndex(Request $request)
    {
        $pembayaran = Pembayaran::whereIn('status_pembayaran', ['Sukses', 'Gagal'])->latest()->paginate(10);

        if ($request->wantsJson()) {
            return response()->json($pembayaran);
        }

        return view('keuangan.pembayaran_data', ['pembayaran' => $pembayaran]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keuangan.pembayaran_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePembayaranRequest $request)
    {
        $requestData = $request->validate([
            'peminjaman_id' => 'required',
            'user_id' => 'required',
            'tanggal_pembayaran' => 'required|date',
            'metode_pembayaran' => 'required|in:Tunai,Non_Tunai',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5000',
            'status_pembayaran' => 'required|in:Sukses,Gagal',
        ]);

        $pembayaran = new Pembayaran(); // Membuat objek kosong untuk model Pembayaran
        $pembayaran->fill($requestData); // Mengisi model dengan data yang sudah divalidasi

        // Jika file image diunggah, simpan file dan tambahkan path-nya ke kolom image
        if ($request->hasFile('image')) {
            $pembayaran->image = $request->file('image')->store('public/images');
        }

        $pembayaran->save(); // Menyimpan data ke database

        if ($request->wantsJson()) {
            return response()->json($pembayaran);
        }

        return back()->with('pesan', 'Data berhasil disimpan');
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
        return view('keuangan.pembayaran_edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePembayaranRequest $request, Pembayaran $id)
    {
        $requestData = $request->validate([
            'peminjaman_id' => 'required',
            'user_id' => 'required',
            'tanggal_pembayaran' => 'required|date',
            'metode_pembayaran' => 'required|in:Tunai,Non_Tunai',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5000',
            'status_pembayaran' => 'required|in:Sukses,Gagal',
        ]);

        // Temukan data pembayaran berdasarkan ID
        $pembayaran = Pembayaran::findOrFail($id);

        // Perbarui data kecuali image
        $pembayaran->fill($requestData);

        // Jika ada file image baru diunggah
        if ($request->hasFile('image')) {
            // Hapus file lama jika ada
            if ($pembayaran->image) {
                Storage::delete($pembayaran->image);
            }
            // Simpan file baru dan tambahkan path-nya ke kolom image
            $pembayaran->image = $request->file('image')->store('public/images');
        }

        $pembayaran->save(); // Menyimpan perubahan ke database

        if ($request->wantsJson()) {
            return response()->json($pembayaran);
        }

        return back()->with('pesan', 'Data berhasil diperbarui');
    }

    public function updateStatus(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'status' => 'required|in:Sukses,Gagal',
        ]);

        // Cari pembayaran berdasarkan ID
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->status_pembayaran = $validatedData['status'];
        $pembayaran->save();

        // Redirect kembali dengan pesan sukses (pesan hanya ditampilkan sekali)
        return redirect()->back()->with('pesan', 'Status pembayaran berhasil diperbarui menjadi ' . $validatedData['status']);
    }
}