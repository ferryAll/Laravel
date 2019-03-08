@extends('layouts.app')

@section('content')

@auth
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endauth
@endsection

@section('articles')

<ul>
    
@foreach($posts as $post)
<li>{{$post->post_title}}</li>
@endforeach
</ul>
@endsection
