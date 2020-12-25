{{-- ovo je user form  --}}

@extends('layout')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <p>
        <label>Unique Employee Identification</label>
        <input type="text" name="unique">
        </p>

        {{-- <p>
        <label>Title</label>
        <input type="text" name="title" value="{{ old('title') }}">
        </p>

        <p>
            <label>Content</label>
            <input type="text" name="content" value="{{ old('content') }}">
        </p> --}}


        {{-- @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        {{-- ovo nece trebati izbacuje da je req a to mi ne trazi  --}}

        <button type="submit">Save</button>


    </form>

@endsection
