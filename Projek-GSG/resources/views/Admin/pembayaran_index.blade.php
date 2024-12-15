@extends('Admin.layouts',['title'=>'Index Pembayaran'])

@section('contect')
@if(session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
@endif

    <div class="card">
        <h3 class="card-header">Pembayaran Peminjaman Fasilitas</h3>
        <div class="card-body">
            <h5>Halaman pembayaran Admin</h5>
            <p>Halaman ini digunakan untuk menampilkan Pembayaran peminjaman fasilitas yang telah diajukan.</p>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Peminjaman</th>
                        <th>Detail Pembayaran</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Jumlah Pembayaran</th>
                        <th>Status Pembayaran</th>
                        <th>Metode Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembayaran as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->peminjaman_id }}</td>
                            <td>{{ $item->user_id}}
                                <a href="/pembayaran/{{ $item->id }}" class="btn btn-warning btn-sm ml-2">Detail</a>
                            </td>
                            <td>{{ $item->tanggal_pembayaran }}</td>
                            <td>{{ $item->jumlah_pembayaran }}</td>
                            <td>{{ $item->status_pembayaran }}</td>
                            <td>{{ $item->metode_pembayaran }}</td>
                            <td>
                                <a href="/pembayaran/ {{ $item->id  }}" class="btn btn-warning btn-sm">Konfirmasi</a>
                                <form action="/pembayaran/{{ $item->id }}" method="POST" class="d-inline">
                                    @csrf
                                @method('delete')
                                    <button class="btn btn-danger btn-sm ml-2"
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
