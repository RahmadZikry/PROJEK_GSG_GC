@extends ('Admin.layouts',['title'=>'Index Verifikasi'])
@section('contect')
@if(session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
@endif

<div class="card">
    <h3 class="card-header">Verifikasi Peminjaman Fasilitas</h3>
    <div class="card-body">
        <h5>Halaman Verifikasi Adminm</h5>
        <p>Halaman ini digunakan untuk memverifikasi peminjaman fasilitas yang telah diajukan.</p>

        {{-- Tabel statis untuk verifikasi --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Peminjaman</th>
                    <th>Nama Pemohon</th>
                    <th>Fasilitas</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Status Verifikasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- Data statis hanya untuk tampilan --}}
                <tr>
                    <td>1</td>
                    <td>PMJ001</td>
                    <td>John Doe</td>
                    <td>Ruang Meeting</td>
                    <td>2024-11-25</td>
                    <td>Pending</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Verifikasi</a>
                        <button class="btn btn-success btn-sm">Disetujui</button>
                        <button class="btn btn-danger btn-sm">Ditolak</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PMJ002</td>
                    <td>Jane Smith</td>
                    <td>Proyektor</td>
                    <td>2024-11-26</td>
                    <td>Pending</td>
                    {{-- <td>{{ $verifikasi->fasilitas_id }}</td>
                    <td>{{ $fasilitas->nama_fasilitas }}</td>
                    <td>{{ $fasilitas->deskripsi }}</td>
                    <td>{{ $fasilitas->harga_sewa }}</td>
                    <td>{{ $fasilitas->status_ketersediaan }}</td>
                    <td>
                        <a href="/fasilitas/ {{ $fasilitas->id  }}/edit" class="btn btn-warning btn-sm">Edit</a> --}}
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Verifikasi</a>
                        <button class="btn btn-success btn-sm">Disetujui</button>
                        <button class="btn btn-danger btn-sm">Ditolak</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection