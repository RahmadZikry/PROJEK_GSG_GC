@extends('layouts.layouts_admin', ['title' => 'Edit Peminjaman'])

@section('content')
    <div class="card">
        <h3 class="card-header">Edit Peminjaman</h3>
        <div class="card-body">
            <!-- Form untuk mengedit peminjaman -->
            <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="user_id">User ID</label>
                    <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $peminjaman->user_id }}" readonly>
                </div>

                <div class="form-group">
                    <label for="nomor_hp">Nomor HP</label>
                    <input type="text" name="nomor_hp" id="nomor_hp" class="form-control" value="{{ $peminjaman->nomor_hp }}">
                </div>

                <div class="form-group">
                    <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
                    <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" class="form-control" value="{{ $peminjaman->tanggal_peminjaman }}">
                </div>

                <div class="form-group">
                    <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                    <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" class="form-control" value="{{ $peminjaman->tanggal_pengembalian }}">
                </div>

                <div class="form-group">
                    <label for="harga">Harga Pembayaran</label>
                    <input type="number" name="harga" id="harga" class="form-control" value="{{ $peminjaman->harga }}">
                </div>

                <div class="form-group">
                    <label for="status_pembayaran">Status Pembayaran</label>
                    <select name="status_pembayaran" id="status_pembayaran" class="form-control">
                        <option value="Menunggu" {{ $peminjaman->status_pembayaran == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                        <option value="Lunas" {{ $peminjaman->status_pembayaran == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                        <!-- Tambahkan opsi lain jika diperlukan -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="status_verifikasi">Status Verifikasi</label>
                    <select name="status_verifikasi" id="status_verifikasi" class="form-control">
                        <option value="Tertunda" {{ $peminjaman->status_verifikasi == 'Tertunda' ? 'selected' : '' }}>Tertunda</option>
                        <option value="Diterima" {{ $peminjaman->status_verifikasi == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                        <option value="Ditolak" {{ $peminjaman->status_verifikasi == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tujuan_peminjaman">Tujuan Peminjaman</label>
                    <input type="text" name="tujuan_peminjaman" id="tujuan_peminjaman" class="form-control" value="{{ $peminjaman->tujuan_peminjaman }}">
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea name="pesan" id="pesan" class="form-control" rows="4">{{ $peminjaman->pesan }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Bukti Pembayaran</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @if ($peminjaman->image)
                        <img src="{{ asset('storage/' . $peminjaman->image) }}" alt="Bukti Pembayaran" class="mt-2 img-fluid" style="max-width: 200px;">
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
