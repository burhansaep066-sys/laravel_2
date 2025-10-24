{{-- @extends ('layout/main') mengabil data dari folder layout file main.blade.php --}}
@extends ('layout/main')
{{-- @section('container') melakukan pengiriman data ke @yield('container')--}}
@section('container')
<h1 class="mb-5">Post Categories</h1>

<div class="container">
    <div class="row">
        @foreach ($posts as $pos)
        <div class="col-md-4">
            <div class="card text-bg-dark">
                <a href="/categories/{{ $pos->slug }}">
                    <img src="/img/test.png" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3 text-white" style="background-color: rgba(0, 0, 0, 0.7)">{{ $pos->name }}</h5>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
 
