@extends('layouts.layout_tes', ['title' => 'Edit Data Fasilitas'])
@section('conto')
@if(session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
@endif
<div class="card">
    <h5 class="card-header">Edit Data Notifikasi : <b>{{ strtoupper($notifikasi->judul_notifikasi) }}</b></h5>
        <div class="card-body">
        <form action="/notifikasi/{{ $notifikasi->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group mt-1 mb-3">
                <label for="user_id">id user</label>
                <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id"
                    name="user_id" value="{{ old('user_id') ?? $notifikasi->user_id }}">
                <span class="text-danger">{{ $errors->first('user_id') }}</span>
            </div>
            <div class="form-group mt-1 mb-3">
                <label for="judul_notifikasi">Judul Notifikasi</label>
                <input type="text" class="form-control @error('judul_notifikasi') is-invalid @enderror" id="judul_notifikasi" name="judul_notifikasi"
                    value="{{ old('judul_notifikasi') ?? $notifikasi->judul_notifikasi }}">
                <span class="text-danger">{{ $errors->first('judul_notifikasi') }}</span>
            </div>
            <div class="form-group mt-1 mb-3">
                <label for="isi_notifikasi">Keterangan</label>
                <input type="text" class="form-control @error('isi_notifikasi') is-invalid @enderror" id="isi_notifikasi" name="isi_notifikasi"
                    value="{{ old('isi_notifikasi') ?? $notifikasi->isi_notifikasi }}">
                <span class="text-danger">{{ $errors->first('isi_notifikasi') }}</span>
            </div>
            <div class="form-group mt-1 mb-3">
                <label for="tanggal_kirim">Tanggal Kirim</label>
                <input type="text" class="form-control @error('tanggal_kirim') is-invalid @enderror" id="tanggal_kirim" name="tanggal_kirim"
                value="{{ old('tanggal_kirim') ?? $notifikasi->tanggal_kirim }}">
                <span class="text-danger">{{ $errors->first('tanggal_kirim')  }}</span>
            </div>
            <div class="form-group mt-1 mb-3">
                <label for="status_baca">Status</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_baca" id="Dibaca" value="Dibaca"
                        {{ old('status_baca') ?? $notifikasi->status_baca === 'Dibaca' ? 'checked' : '' }}>
                    <label class="form-check-label" for="Dibaca">Dibaca</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status_baca" id="Belum_Dibaca" value="Belum Dibaca"
                        {{ old('status_baca') ?? $notifikasi->status_baca === 'Belum Dibaca' ? 'checked' : '' }}>
                    <label class="form-check-label" for="Belum_Dibaca">Belum Dibaca</label>
                </div>
                <span class="text-danger">{{ $errors->first('status_baca') }}</span>
            </div>
            <button type="submit" class="btn btn-primary">UPDATE</button>
            <a href="{{ route('notifikasi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
