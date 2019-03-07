@extends('layouts/main')

@section('content')


<h3>{{$post->post_title}} </h3>

<p>
{{$post->post_content}}
</p>

{{$post->author->name}}



@endsection