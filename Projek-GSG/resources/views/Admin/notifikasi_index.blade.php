@extends('layouts.layouts_admin',['title'=>'Index Notifikasi'])

@section('content')
@if(session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
@endif

    <div class="card">
        <h3 class="card-header">Kelola Notifikasi</h3>
        <div class="card-body">
            <h5>Halaman Notifikasi Admin</h5>
            <p>Halaman ini digunakan untuk menampilkan Notifikasi yang telah dibuat.</p>
            <div class="col-md-6">
                <a href="/notifikasi/create" class="btn btn-primary btn-sm">Tambah Notifikasi</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Notifikasi</th>
                        <th>ID User</th>
                        <th>Judul Notifikasi</th>
                        <th>Detail Notifikasi</th>
                        <th>Tanggal Dikirim</th>
                        <th>Status Baca</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notifikasi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->user_id}}</td>
                            <td>{{ $item->judul_notifikasi }}</td>
                            <td>{{ $item->isi_notifikasi }}
                                <a href="/notifikasi/{{ $item->id }}" class="ml-2 btn btn-warning btn-sm">Detail</a>
                            </td>
                            <td>{{ $item->tanggal_kirim }}</td>
                            <td>{{ $item->status_baca }}</td>
                            <td>
                                <form action="/notifikasi/{{ $item->id }}" method="POST" class="d-inline">
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
            <div class="d-flex justify-content-center">
                {{ $notifikasi->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
