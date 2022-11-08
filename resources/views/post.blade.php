@extends('main')

@section('title', 'Detail Post')

@section('container')    
    <h1>{{ $post->title }}</h1>
    {{-- escape html tag --}}
    {!! $post->body !!} 
    <a href="/blog">back</a>
@endsection