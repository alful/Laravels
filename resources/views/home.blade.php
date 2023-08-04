@extends('layouts.main')


@section('headers')
    <h1>Halaman Home</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>

    {{-- @include('slider') --}}


    {{-- <div class="container">
        <div id="carouselExample" class="carousel slide">

            <div class="carousel-inner" style=" width:100%; height: 500px !important;">>
                @foreach ($posts as $post)
                    @if ($loop->first)
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100"
                                alt="{{ $post->slug }} slide">
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100"
                                alt="{{ $post->slug }} slide">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <button class="carousel-control-prev bg bg-dark" type="button" data-bs-target="#carouselExample"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next bg bg-dark" type="button" data-bs-target="#carouselExample"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}
    {{-- </div> --}}
@endsection
