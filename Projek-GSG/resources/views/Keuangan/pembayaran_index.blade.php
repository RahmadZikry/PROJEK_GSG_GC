@extends('layouts.layouts_keuangan',['title'=>'Index Pembayaran'])

@section('content')
@if(session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
@endif
    <div class="card">
        <h3 class="card-header">Pembayaran Peminjaman GSG</h3>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Peminjaman</th>
                        <th>ID User</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Status Pembayaran</th>
                        <th>Metode Pembayaran</th>
                        <th>Bukti Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembayaran as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->peminjamen->id }}</td>
                            <td>{{ $item->users->id}}</td>
                            <td>{{ $item->peminjamen->tanggal_pembayaran }}</td>
                            <td>{{ $item->peminjamen->status_pembayara }}</td>
                            <td>{{ $item->peminjamen->metode_pembayaran }}</td>
                            <td>{{ $item->peminjamen->bukti_pembayaran }}</td>
                            <td>
                                <a href="/pembayaran/ {{ $item->id  }}" class="btn btn-warning btn-sm">Konfirmasi</a>
                                <form action="/pembayaran/{{ $item->id }}" method="POST" class="d-inline">
                                    @csrf
                                @method('delete')
                                    <button class="ml-2 btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
