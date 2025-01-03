@extends('layouts.layout_tes', ['title' => 'Edit Data Fasilitas'])
@section('conto')
@if(session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
@endif
<div class="card">
    <h5 class="card-header">Edit Data Fasilitas : <b>{{ strtoupper($fasilitas->nama_fasilitas) }}</b></h5>
        <div class="card-body">
        <form action="/fasilitas/{{ $fasilitas->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group mt-1 mb-3">
                <label for="fasilitas_id">Nomor Fasilitas</label>
                <input type="text" class="form-control @error('fasilitas_id') is-invalid @enderror" id="fasilitas_id"
                    name="fasilitas_id" value="{{ old('fasilitas_id') ?? $fasilitas->fasilitas_id }}">
                <span class="text-danger">{{ $errors->first('fasilitas_id') }}</span>
            </div>
            <div class="form-group mt-1 mb-3">
                <label for="nama_fasilitas">Nama Fasilitas</label>
                <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror" id="nama_fasilitas" name="nama_fasilitas"
                    value="{{ old('nama_fasilitas') ?? $fasilitas->nama_fasilitas }}">
                <span class="text-danger">{{ $errors->first('nama_fasilitas') }}</span>
            </div>
            <div class="form-group mt-1 mb-3">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
                    value="{{ old('deskripsi') ?? $fasilitas->deskripsi }}">
                <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
            </div>
            <div class="form-group mt-1 mb-3">
                <label for="harga_sewa">Harga Sewa</label>
                <input type="text" class="form-control @error('harga_sewa') is-invalid @enderror" id="harga_sewa" name="harga_sewa"
                value="{{ old('harga_sewa') ?? $fasilitas->harga_sewa }}">
                <span class="text-danger">{{ $errors->first('harga_sewa')  }}</span>
            </div>
            <div class="form-group mt-1 mb-3">
                <label for="status_ketersediaan">Status Ketersediaan</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_ketersediaan" id="Tersedia" value="Tersedia"
                        {{ old('status_ketersediaan') ?? $fasilitas->status_ketersediaan === 'Tersedia' ? 'checked' : '' }}>
                    <label class="form-check-label" for="Tersedia">Tersedia</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_ketersediaan" id="Tidak Tersedia" value="Tidak Tersedia"
                        {{ old('status_ketersediaan') ?? $fasilitas->status_ketersediaan === 'Tidak Tersedia' ? 'checked' : '' }}>
                    <label class="form-check-label" for="Tidak Tersedia">Tidak Tersedia</label>
                </div>
                <span class="text-danger">{{ $errors->first('status_ketersediaan') }}</span>
            </div>
            <button type="submit" class="btn btn-primary">UPDATE</button>
            <a href="{{ route('fasilitas.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
