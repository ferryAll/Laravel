@extends('layouts/main')

@section('content')
<h1>Home</h1>
<ul>
@foreach ($posts as $post )
<li>{{ $post->post_titlef }}</li>
@endforeach
</ul>
@endsection