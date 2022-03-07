
@extends('layouts.main')

@section('container')
<h1>Post</h1>

@foreach ($posts as $post )

<h2>
    <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
</h2>
<h5>{{ $post->author }}</h5>
    {{ $post->excerpt }}
    
@endforeach

@endsection

