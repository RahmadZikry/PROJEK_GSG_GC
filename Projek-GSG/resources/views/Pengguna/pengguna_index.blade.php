@extends ('layouts.layouts_pengguna1' ,['title'=>'Index Admin'])
@section('content')
    <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
@endsection