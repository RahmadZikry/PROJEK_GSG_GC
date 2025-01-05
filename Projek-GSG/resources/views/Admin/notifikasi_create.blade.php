@extends('layouts.layouts_admin', ['title' => 'Pendaftaran Pasien Baru'])
@section('content')
<div class="card">
    <div class="card-header">Tambah Notifikasi</div>
    <div class="card-body">
        <form action="/notifikasi" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="user_id">User ID</label>
                <input type="text" id="user_id" name="user_id" required>
            </div>
            <div>
                <label for="judul_notifikasi">Judul Notifikasi</label>
                <input type="text" id="judul_notifikasi" name="judul_notifikasi" required>
            </div>
            <div>
                <label for="isi_notifikasi">Isi Notifikasi</label>
                <textarea id="isi_notifikasi" name="isi_notifikasi" required></textarea>
            </div>
            <div>
                <label for="tanggal_kirim">Tanggal Kirim</label>
                <input type="date" id="tanggal_kirim" name="tanggal_kirim" required>
            </div>
            <div>
                <label for="status_baca">Status Baca</label>
                <select id="status_baca" name="status_baca" required>
                    <option value="Dibaca">Dibaca</option>
                    <option value="Belum Dibaca">Belum Dibaca</option>
                </select>
            </div>
            <button type="submit">Simpan</button>
        </form>        
    </div>
</div>
@endsection
