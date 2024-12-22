@extends('layouts.layouts_admin', ['title' => 'Pendaftaran Pasien Baru'])
@section('content')
<div class="card">
    <div class="card-header">PENDAFTARAN PASIEN</div>
    <div class="card-body">
        <form action="/daftar" method="POST">
            @csrf

            
            <div class="form-group mt-3">
                <label for="tanggal_daftar">Tanggal Daftar</label>

                <input type="date" name="tanggal_daftar" class="form-control" value="{{ old('tanggal_daftar') ?? date('Y-m-d') }}">

                <span class="text-danger">{{ $errors->first('tanggal_daftar')}}</span>
            </div>
            <div class="form-group mt-3">
                <label for="user_id">Nama User
                    {{-- <a href="/User/create" target="blank">User Baru</a> --}}
                </label>

                <select name="user_id" class="form-control select2" data- placeholder="Cari nama user..."
                    style="width: 100%;">
                    <option value="">-- Pilih User --</option>
                    @foreach ($listUser as $item)

                    <option value="{{ $item->id }}" @selected(old('user_id')==$item->id)>

                        {{ $item->no_pengguna }} - {{ $item->nama }}
                    </option>
                    @endforeach
                </select>
                <span class="text-danger">{{ $errors->first('pasien_id')}}</span>

            </div>

            <button type="submit" class="btn btn-primary">Simpan Pendaftaran</button>
        </form>
    </div>
</div>
@endsection
