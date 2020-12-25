{{-- ovo je user form  --}}

@extends('layout')

@section('content')
    <form method="POST"
          action="{{ route('posts.update', ['post'=>$post->id]) }}">
        @csrf
        @method('PUT')

        <p>
            <label>Unique Employee Identification</label>
            <input type="text" name="unique" value="{{ old('unique', $post->unique) }}">
        </p>

        {{-- <p>
        <label>Title</label>
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
        </p> --}}
        {{-- ovde fetchuje value --}}

        {{-- <p>
            <label>Content</label>
            <input type="text" name="content" value="{{ old('content', $post->content) }}">
        </p>

        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        {{-- ovo nece trebati izbacuje da je req a to mi ne trazi  --}}

        <button type="submit">Update</button>


    </form>

@endsection
