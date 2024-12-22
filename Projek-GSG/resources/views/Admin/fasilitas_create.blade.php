@extends ('Admin.layouts',['title'=>'Tambah Data Fasilitas'])
@section('contect')
    <div class="card">
        <h5 class="card-header">Tambah Data Fasilitas</h5>
        <div class="card-body">
            <form action="/fasilitas" method="POST">
                @csrf
                <div class="form-group mt-1 mb-3">
                    <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
                    <input type="text" name="nama_fasilitas" id="nama_fasilitas"
                        class="form-control @error('nama_fasilitas') is-invalid @enderror" value="{{ old('nama_fasilitas') }}" required>
                    <span class="text-danger">{{ $errors->first('nama_fasilitas') }}</span>
                </div>

                <div class="form-group mt-1 mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi"
                        class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}" required>
                    <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                </div>

                <div class="form-group mt-1 mb-3">
                    <label for="harga_sewa" class="form-label">Harga Sewa</label>
                    <input type="text" name="harga_sewa" id="harga_sewa"
                        class="form-control @error('harga_sewa') is-invalid @enderror" value="{{ old('harga_sewa') }}" required>
                    <span class="text-danger">{{ $errors->first('harga_sewa') }}</span>
                </div>

                <div class="form-group mt-1 mb-3">
                    <label for="status_ketersediaan" class="form-label">Status</label>
                    <input type="text" name="status_ketersediaan" id="status_ketersediaan"
                        class="form-control @error('status_ketersediaan') is-invalid @enderror" value="{{ old('status_ketersediaan') }}" required>
                    <span class="text-danger">{{ $errors->first('status_ketersediaan') }}</span>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
