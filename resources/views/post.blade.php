@extends('layouts.main')


@section('headers')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class=" mb-3">{{ $post->title }}</h1>
                <p>By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                        {{ $post->author->name }} </a> Category : <a href="/posts?category={{ $post->category->slug }}"
                        class="text-decoration-none"> {{ $post->category->name }} </a></p>


                {{-- {{$post->body}} --}}

                {{-- untuk menghilangkan tag html --}}
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    {{-- untuk menghilangkan tag html --}}
                    <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9&fm=jpg&fm{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <article class="my-3 fs-6">
                    {!! $post->body !!}

                </article>

                <a href="/posts" class="d-block mt-3">Back to Post</a>

            </div>
        </div>
    </div>
@endsection
