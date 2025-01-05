@extends ('layouts.layouts_keuangan',['title'=>'Index Keuangan'])
@section('content')
    <h1>Selamat Datang Di Home, {{ Auth::user()->name }}</h1>
@endsection
