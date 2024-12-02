@extends('Admin.layouts',['title'=>'Index Peminjaman'])

@section('contect')
@if(session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
@endif

    <div class="card">
        <h3 class="card-header">Peminjaman Fasilitas</h3>
        <div class="card-body">
            <h5>Halaman peminjaman Admin</h5>
            <p>Halaman ini digunakan untuk menampilkan peminjaman fasilitas yang telah diajukan.</p>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Peminjaman</th>
                        <th>Detail Peminjaman</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Jadwal Ketersediaan</th>
                        <th>Status Verifikasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peminjaman as $item)
                        <tr>
                            <td>{{ $peminjaman->peminjaman_id }}</td>
                            <td>{{ $peminjaman->user_id}}</td>
                            <td>{{ $peminjaman->tanggal_peminjaman }}</td>
                            <td>{{ $peminjaman->tanggal_pengembalian }}</td>
                            <td>{{ $peminjaman->bukti_pembayaran }}</td>
                            <td>{{ $peminjaman->status_verifikasi }}</td>
                            <td>
                                <a href="/peminjaman/ {{ $item->id  }}" class="btn btn-warning btn-sm">Verifikasi</a>

    
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
