@extends ('layouts.layouts_admin' ,['title'=>'Index Admin'])
@section('content')
    <h1>Selamat Datang Di Home, {{ Auth::user()->name }}</h1>
@endsection
