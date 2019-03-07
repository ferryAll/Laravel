@extends('layouts/main')

@section('content')
<h1>Home</h1>
<h5> Derniers articles </h5>
<ul>
@foreach ($posts as $post )
<li>

    <a href="{{ url('articles/'.$post->post_name) }}"> {{$post->post_title}} créé par {{$post->author->name}} </a>

</li>
@endforeach
</ul>

@endsection