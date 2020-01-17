@extends('layouts.app')
@section('content')
<h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="row">
                <div class="col md-4 sm-4">
                    <img src="/storage/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col md-8 sm-8">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written at {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
    @else
        <h3>No Posts found...</h3>
        
    @endif
@endsection