@extends('layouts.layouts_admin', ['title' => 'Index Peminjaman'])

@section('content')
@if(session('pesan'))
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
                            <form action="{{ route('peminjaman.updateStatus', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="status" value="Disetujui">
                                <button class="btn btn-warning btn-sm" onclick="return confirm('Yakin ingin mengubah status menjadi Disetujui?')">Detail</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
