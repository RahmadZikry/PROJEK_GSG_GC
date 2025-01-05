@extends('layouts.layouts_admin', ['title' => 'Detail Peminjaman'])

@section('content')
<div class="card">
    <h3 class="card-header">Detail Peminjaman</h3>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>User ID</th>
                <td>{{ $peminjaman->user_id }}</td>
            </tr>
            <tr>
                <th>Nomor HP</th>
                <td>{{ $peminjaman->nomor_hp }}</td>
            </tr>
            <tr>
                <th>Tanggal Peminjaman</th>
                <td>{{ $peminjaman->tanggal_peminjaman }}</td>
            </tr>
            <tr>
                <th>Tanggal Pengembalian</th>
                <td>{{ $peminjaman->tanggal_pengembalian }}</td>
            </tr>
            <tr>
                <th>Metode Pembayaran</th>
                <td>{{ $peminjaman->metode_pembayaran }}</td>
            </tr>
            <tr>
                <th>Status Pembayaran</th>
                <td>{{ $peminjaman->status_pembayaran }}</td>
            </tr>
            <tr>
                <th>Status Verifikasi</th>
                <td>{{ $peminjaman->status_verifikasi }}</td>
            </tr>
            <tr>
                <th>Tujuan Peminjaman</th>
                <td>{{ $peminjaman->tujuan_peminjaman }}</td>
            </tr>
            <tr>
                <th>Pesan</th>
                <td>{{ $peminjaman->pesan }}</td>
            </tr>
            <tr>
                <th>Bukti Pembayaran</th>
                <td>
                    <img src="{{ asset('storage/' . $peminjaman->image) }}" alt="Bukti Pembayaran" class="img-fluid" style="max-width: 300px;">
                </td>
            </tr>
            <tr>
                <th>Dibuat Pada</th>
                <td>{{ $peminjaman->created_at }}</td>
            </tr>
        </table>

        <a href="{{ route('peminjaman.index') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection
