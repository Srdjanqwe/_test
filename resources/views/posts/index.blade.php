@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <p>
            {{-- <h3>{{ $post->unique }}</h3> --}}
            <h3><a href="{{ route('posts.show', ['post' =>$post->id]) }}">{{ $post->unique }}</a></h3>

            <div class="mb-3">
                <a class="btn btn-primary" href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit</a>
            </div>
        </p>


    @endforeach

@endsection('content')
