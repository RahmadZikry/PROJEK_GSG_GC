@extends($layout)

@section('content')
    <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
    <p>Anda login sebagai
        @if (Auth::user()->type == 1)
            Admin
        @elseif (Auth::user()->type == 2)
            Keuangan
        @else
            Pengguna
        @endif
    </p>
@endsection
