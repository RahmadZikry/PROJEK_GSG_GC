@extends('layouts.layouts_keuangan', ['title' => 'Data Pembayaran'])

@section('content')
@if(session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
@endif
    <div class="card">
        <h3 class="card-header">Data Pembayaran Peminjaman GSG</h3>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID User</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Metode Pembayaran</th>
                        <th>Status Pembayaran</th>
                        <th>Bukti Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peminjaman as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->tanggal_peminjaman }}</td>
                            <td>{{ $item->tanggal_pengembalian }}</td>
                            <td>{{ $item->metode_pembayaran }}</td>
                            <td>{{ $item->status_pembayaran }}</td>
                            <td>
                                @if($item->image)
                                    <a href="{{ \Storage::url($item->image) }}" target="_blank">
                                        <img src="{{ \Storage::url($item->image) }}" alt="Bukti Pembayaran" width="50">
                                    </a>
                                @else
                                    Tidak ada bukti
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $peminjaman->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
