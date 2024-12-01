@extends ('Admin.layouts' ,['title'=>'Index Fasilitas'])
@section('contect')
<div class="card">
    <h5 class="card-header">Data Fasilitas</h5>
    <div class="card-body">
        <div class="row mb-3 mt-3">
            <div class="col-md-6">
                <a href="/" class="btn btn-primary btn-sm">Daftar Pengguna</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga Sewa</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penggunas as $penggunas)
                <tr>
                    <td>{{ $penggunas->fasilitas_id }}</td>
                    <td>{{ $penggunas->nama_fasilitas }}</td>
                    <td>{{ $penggunas->deskripsi }}</td>
                    <td>{{ $penggunas->harga_sewa }}</td>
                    <td>{{ $penggunas->status_ketersediaan }}</td>
                    <td>
                        <a href="/fasilitas/ {{ $fasilitas->id  }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/fasilitas/{{ $fasilitas->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm ml-2" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>

                        </form>


                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>
@endsection
