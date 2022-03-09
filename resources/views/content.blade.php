@extends('layouts.main')

@section('container')

<h2>{{ $post->title }}</h2>
<p>By <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
<h5>{{ $post->author }}</h5>
{!! $post->body !!}

<a href="/post">Back to posts</a>

@endsection 