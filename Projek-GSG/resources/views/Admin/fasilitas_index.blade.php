@extends ('layouts.layouts_admin' ,['title'=>'Index Admin'])
@section('content')
    <div class="card">
        <h5 class="card-header">Data Fasilitas</h5>
        <div class="card-body">
            <div class="row mb-3 mt-3">
            <div class="col-md-6">
                <a href="/fasilitas/create" class="btn btn-primary btn-sm">Tambah fasilitas</a>
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
                @foreach ($fasilitas as $fasilitas)
                    <tr>
                        <td>{{ $fasilitas->fasilitas_id }}</td>
                        <td>{{ $fasilitas->nama_fasilitas }}</td>
                        <td>{{ $fasilitas->deskripsi }}</td>
                        <td>{{ $fasilitas->harga_sewa }}</td>
                        <td>{{ $fasilitas->status_ketersediaan }}</td>
                        <td>
                            <a href="/fasilitas/ {{ $fasilitas->id  }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/fasilitas/{{ $fasilitas->id }}" method="POST" class="d-inline">
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
