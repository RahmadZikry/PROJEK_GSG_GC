@extends ('layouts.layouts_admin',['title'=>'Tambah Data Fasilitas'])
@section('content')
    <div class="card">
        <h5 class="card-header">Tambah Data Notifikasi</h5>
        <div class="card-body">
            <form action="/notifikasi" method="POST">
                @csrf
                <div class="form-group mt-1 mb-3">
                    <label for="user_id" class="form-label">id user</label>
                    <input type="text" name="user_id" id="user_id"
                        class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id') }}" required>
                    <span class="text-danger">{{ $errors->first('user_id') }}</span>
                </div>

                <div class="form-group mt-1 mb-3">
                    <label for="judul_notifikasi" class="form-label">Judul Notifikasi</label>
                    <input type="text" name="judul_notifikasi" id="judul_notifikasi"
                        class="form-control @error('judul_notifikasi') is-invalid @enderror" value="{{ old('judul_notifikasi') }}" required>
                    <span class="text-danger">{{ $errors->first('judul_notifikasi') }}</span>
                </div>

                <div class="form-group mt-1 mb-3">
                    <label for="isi_notifikasi" class="form-label">Keterangan</label>
                    <input type="text" name="isi_notifikasi" id="isi_notifikasi"
                        class="form-control @error('isi_notifikasi') is-invalid @enderror" value="{{ old('isi_notifikasi') }}" required>
                    <span class="text-danger">{{ $errors->first('isi_notifikasi') }}</span>
                </div>
                <div class="form-group mt-3">
                    <label for="tanggal_kirim">Tanggal Kirim</label>
                    <input type="date" name="tanggal_kirim" id="tanggal_kirim"
                    class="form-control" value="{{ old('tanggal_kirim') ?? date('Y-m-d') }}">
                    <span class="text-danger">{{ $errors->first('tanggal_kirim')}}</span>
                </div>

                <div class="form-group mt-1 mb-3">
                    <label for="status_baca">Status</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_baca" id="Dibaca" value="Dibaca"
                            {{ old('status_baca') === 'Dibaca' ? 'checked' : '' }}>
                        <label class="form-check-label" for="Dibaca">Dibaca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_baca" id="Belum_Dibaca" value="Belum Dibaca"
                            {{ old('status_baca') === 'Belum Dibaca' ? 'checked' : '' }}>
                        <label class="form-check-label" for="Belum_Dibaca">Belum Dibaca</label>
                    </div>
                    <span class="text-danger">{{ $errors->first('status_baca') }}</span>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('notifikasi.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
