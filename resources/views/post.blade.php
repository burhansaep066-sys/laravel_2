{{-- @extends ('layout/main') mengabil data dari folder layout file main.blade.php --}}
@extends ('layout/main')
{{-- @section('container') melakukan pengiriman data ke @yield('container')--}}
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $kirim->title }}</h1>
                <p>By 
                    <a href="/authors/{{ $kirim->author->user_name }}" class="text-decoration-none">{{ $kirim->author->name }}</a>
                    <a href="/blog?category={{ $kirim->Category->slug }}">{{ $kirim->Category->name }}</a>
                </p>
                <img src="/img/test.png" alt="" class="img-fluid mx-auto d-block">
                <article class="my-3 fs-5">
                    {!! $kirim->body !!}
                </article>
                <a href="/blog">Kembali</a>
            </div>
        </div>
    </div>
    {{-- <article> --}}
        {{-- $kirim adalah hasil dari post file PostController ->title untuk menenukan apa yang akan diambil dari data tersebut --}}
          {{-- <h1>{{ $kirim->title }}</h1>  --}}
            {{-- <br> --}}
            {{-- {{ $kirim->Category->name }} $kirim $kirim adalah hasil dari controller post file PostController -> lalu masuk ke dalam controller file Category-> lalu mencari name pada tabel category--}}
            
    {{-- </article> --}}
@endsection