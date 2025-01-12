@extends ('layouts.layouts_pengguna1' ,['title'=>'Index Pengguna'])
@section('content')
    <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
@endsection
