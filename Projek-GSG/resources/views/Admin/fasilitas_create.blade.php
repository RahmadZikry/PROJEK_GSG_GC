@extends ('layouts.layouts_admin',['title'=>'Tambah Data Fasilitas'])
@section('content')
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
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                        value="{{ old('alamat') }}">
                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                </div>

                <div class="form-group mt-1 mb-3">
                    <label for="status_ketersediaan">Status</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_ketersediaan" id="Tersedia" value="Tersedia"
                            {{ old('status_ketersediaan') === 'Tersedia' ? 'checked' : '' }}>
                        <label class="form-check-label" for="Tersedia">Tersedia</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_ketersediaan" id="Tidak_Tersedia" value="Tidak Tersedia"
                            {{ old('status_ketersediaan') === 'Tidak Tersedia' ? 'checked' : '' }}>
                        <label class="form-check-label" for="Tidak_Tersedia">Tidak Tersedia</label>
                    </div>
                    <span class="text-danger">{{ $errors->first('status_ketersediaan') }}</span>
                </div>


                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('fasilitas.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
