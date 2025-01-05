@extends('layouts.layouts_admin', ['title' => 'Index Peminjaman'])

@section('content')
@if(session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
@endif

<div class="card">
    <h3 class="card-header">Peminjaman Fasilitas</h3>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Nomor HP</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status Pembayaran</th>
                    <th>Status Verifikasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjaman as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->nomor_hp }}</td>
                        <td>{{ $item->tanggal_peminjaman }}</td>
                        <td>{{ $item->tanggal_pengembalian }}</td>
                        <td>{{ $item->status_pembayaran }}</td>
                        <td>{{ $item->status_verifikasi }}</td>
                        <td>
                            <a href="peminjaman/{{ $item->id }}" class="btn btn-primary btn-sm">Detail</a>
                            <a href="peminjaman/{{ $item->id }}/verifikasi" class="btn btn-warning btn-sm">Verifikasi</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
