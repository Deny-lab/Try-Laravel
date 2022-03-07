@extends('layouts.main')

@section('container')
<h1>Post Category : {{ $category }}</h1>

@foreach ($post as $p )

<h2>
    <a href="/post/{{ $p->slug }}">{{ $p->title }}</a>
</h2>
<h5>{{ $p->author }}</h5>
    {{ $p->excerpt }}
    
@endforeach

@endsection 