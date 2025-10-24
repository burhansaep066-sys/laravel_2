{{--@extends ('layout/main') mengabil data dari folder layout file main.blade.php --}}
@extends ('layout/main')
{{--@section('container') melakukan pengiriman data ke @yield('container')--}}
@section('container')
    <h1>Hello, world!</h1>
    <h3>Nama : {{ $nama }}</h3>
    <h3>Email : {{ $email }}</h3>
    <img src="img/{{ $image }}" alt="">
@endsection
