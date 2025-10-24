{{-- cara 1-3 --}}
{{-- @extends ('layout/main') mengabil data dari folder layout file main.blade.php --}}
{{-- @extends ('layout/main') --}}
{{-- @section('container') melakukan pengiriman data ke @yield('container')--}}
{{-- @section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1> --}}

{{-- search sesuatu menggunakan form dikirim lewat link /blog, lalu di tangkap di controler --}}
{{-- <div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/blog">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="seacrh" value="{{ request('seacrh') }}">
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3">
        <img src="/img/test.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
                 </h5>
                <p>
                    <small class="text-body-secondary">
                        By.<a href="/authors/{{ $posts[0]->author->user_name }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in
                        <a href="/categories/{{ $posts[0]->Category->slug }}" class="text-decoration-none">{{ $posts[0]->Category->name }}</a> {{ $posts[0]->created_at->diffForHumans()}}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excertpt }}</p>
                <a href="posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
    </div> --}}

{{-- <div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $pos)
            <div class="col-md-4 mb-3">
                <div class="card"> --}}
                
                    {{-- <img src="{{ asset('storage/post_images/1.jpg') }}" class="card-img-top" alt="..."> --}}
                    {{-- <div class="position-absolute px-3 py-3 text-white" style="background-color: rgba(0, 0, 0, 0.5)">
                        <a href="/categories/{{ $pos->category->slug }}" class="text-decoration-none text-white">{{ $pos->category->name }}</a>
                    </div>                
                    <img src="/img/test.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/posts/{{ $pos->slug }}" class="text-decoration-none text-dark">{{ $pos->title }}</a>
                            </h5>
                            <p>
                                <small class="text-body-secondary">
                                    By.<a href="/authors/{{ $pos->author->user_name }}" class="text-decoration-none">{{ $pos->author->name }}</a> in
                                    {{ $pos->created_at->diffForHumans()}}
                                </small>
                            </p>
                            <p class="card-text">{{ $pos->excertpt }}</p>
                            <a href="/posts/{{ $pos->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                </div>
            </div>
        @endforeach   
    </div>
</div> --}}

{{-- @else
 <p class="text-center fs-4">No Post Found.</p>
@endif
@endsection --}}
{{-- end cara 1-3 --}}

{{-- cara 4 --}}
{{-- @extends ('layout/main') mengabil data dari folder layout file main.blade.php --}}
@extends ('layout/main')
{{-- @section('container') melakukan pengiriman data ke @yield('container')--}}
@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

{{-- search sesuatu menggunakan form dikirim lewat link /blog, lalu di tangkap di controler --}}
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/blog">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="seacrh" value="{{ request('seacrh') }}">
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3">
        <img src="/img/test.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
                 </h5>
                <p>
                    <small class="text-body-secondary">
                        By.<a href="/authors/{{ $posts[0]->author->user_name }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in
                        <a href="/blog?category={{ $posts[0]->Category->slug }}" class="text-decoration-none">{{ $posts[0]->Category->name }}</a> {{ $posts[0]->created_at->diffForHumans()}}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excertpt }}</p>
                <a href="posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
    </div>

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $pos)
            <div class="col-md-4 mb-3">
                <div class="card">
                
                    {{-- <img src="{{ asset('storage/post_images/1.jpg') }}" class="card-img-top" alt="..."> --}}
                    <div class="position-absolute px-3 py-3 text-white" style="background-color: rgba(0, 0, 0, 0.5)">
                        <a href="/blog?category={{ $pos->category->slug }}" class="text-decoration-none text-white">{{ $pos->category->name }}</a>
                    </div>                
                    <img src="/img/test.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/posts/{{ $pos->slug }}" class="text-decoration-none text-dark">{{ $pos->title }}</a>
                            </h5>
                            <p>
                                <small class="text-body-secondary">
                                    By.<a href="/authors/{{ $pos->author->user_name }}" class="text-decoration-none">{{ $pos->author->name }}</a> in
                                    {{ $pos->created_at->diffForHumans()}}
                                </small>
                            </p>
                            <p class="card-text">{{ $pos->excertpt }}</p>
                            <a href="/posts/{{ $pos->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                </div>
            </div>
        @endforeach   
    </div>
</div>

@else
 <p class="text-center fs-4">No Post Found.</p>
@endif
@endsection
{{-- end cara 4 --}}
