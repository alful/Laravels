@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class=" mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to post</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

                {{-- {{$post->body}} --}}

                {{-- untuk menghilangkan tag html --}}
                <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9&fm=jpg&fm{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid mt-3">
                <article class="my-3 fs-6">
                    {!! $post->body !!}

                </article>


            </div>
        </div>
    </div>
@endsection
