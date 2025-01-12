<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorepeminjamanRequest;
use App\Http\Requests\UpdatepeminjamanRequest;


class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = Peminjaman::whereIn('status_verifikasi', ['tertunda'])->latest()->paginate(10);
        if (request()->wantsJson()) {
            return response()->json($peminjaman);
        }
        $data['peminjaman'] = $peminjaman;
        return view('admin.peminjaman_index', $data);
    }

    public function dataindex()
    {
        $peminjaman = Peminjaman::whereIn('status_verifikasi', ['Disetujui', 'Ditolak'])->latest()->paginate(10);
        if (request()->wantsJson()) {
            return response()->json($peminjaman);
        }
        $data['peminjaman'] = $peminjaman;
        return view('admin.peminjaman_data', $data);
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

    public function updateStatus(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'status' => 'required|in:Disetujui,Ditolak',
        ]);

        // Cari pembayaran berdasarkan ID
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->status_verifikasi = $validatedData['status'];
        $peminjaman->save();

        // Redirect kembali dengan pesan sukses (pesan hanya ditampilkan sekali)
        return redirect()->back()->with('pesan', 'Status pembayaran berhasil diperbarui menjadi ' . $validatedData['status']);
    }

    public function show($id)
    {
        $peminjaman = Peminjaman::findOrFail($id); // Cari data berdasarkan ID
        return view('admin.peminjaman_show', compact('peminjaman')); // Kirim data ke view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Mencari peminjaman berdasarkan ID
        $peminjaman = Peminjaman::findOrFail($id);

        // Menampilkan form edit dengan data peminjaman
        return view('admin.peminjaman_edit', compact('peminjaman'));
    }
    
    public function update(UpdatePeminjamanRequest $request, $id)
    {
        // Mencari peminjaman berdasarkan ID
        $peminjaman = Peminjaman::findOrFail($id);

        // Validasi input
        $validatedData = $request->validate([
            'tanggal_peminjaman' => 'required|date',
            'tanggal_pengembalian' => 'required|date|after:tanggal_peminjaman',
            'tujuan_peminjaman' => 'required|string|max:255',
            'nomor_hp' => 'required|string|min:10|max:13',
            'pesan' => 'nullable|string|max:500',
        ]);

        // Upload gambar (jika ada gambar baru yang diunggah)
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($peminjaman->image) {
                Storage::delete('public/' . $peminjaman->image);
            }

            // Upload gambar baru
            $path = $request->file('image')->store('public/bukti_pembayaran');
            $validatedData['image'] = Storage::url($path); // Mendapatkan URL gambar
        }

        // Jika tidak ada gambar yang diunggah, set null
        if (!$request->hasFile('image')) {
            $validatedData['image'] = $peminjaman->image; // Menggunakan gambar lama jika tidak ada gambar baru
        }

        // Update data lainnya
        $validatedData['user_id'] = Auth::id();
        $validatedData['status_verifikasi'] = $validatedData['status_verifikasi'] ?? $peminjaman->status_verifikasi; // Mempertahankan status verifikasi jika tidak diubah
        $validatedData['status_pembayaran'] = $validatedData['status_pembayaran'] ?? $peminjaman->status_pembayaran; // Mempertahankan status pembayaran jika tidak diubah
        $validatedData['harga'] = $validatedData['harga'] ?? $peminjaman->harga; // Mempertahankan harga jika tidak diubah

        // Perbarui data peminjaman
        $peminjaman->update($validatedData);

        // Kembalikan respons
        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
}