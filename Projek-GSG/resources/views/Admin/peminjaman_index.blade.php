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
                        <th>ID Fasilitas</th>
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
                            <td>{{ $item->fasilitas_id }}</td>
                            <td>{{ $item->user_id}}</td>
                            <td>{{ $item->tanggal_peminjaman }}</td>
                            <td>{{ $item->tanggal_pengembalian }}</td>
                            <td>{{ $item->bukti_pembayaran }}</td>
                            <td>{{ $item->status_verifikasi }}</td>
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
