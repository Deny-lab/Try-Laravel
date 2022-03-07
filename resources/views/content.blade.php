@extends('layouts.main')

@section('container')

<h2>{{ $post->title }}</h2>
<h5>{{ $post->author }}</h5>
{!! $post->body !!}

<a href="/post">Back to posts</a>

@endsection 