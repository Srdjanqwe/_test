@extends('layout')

@section('content')
 {{ $welcome }}{{ $data['unique'] }}   {{-- render data inside the view --}}
 {{-- {!! $welcome !!}{{ $data['title'] }}  render data as it is some java --}}


@endsection('content')
