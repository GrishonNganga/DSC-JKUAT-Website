@extends('layouts.app')
@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' =>'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::hidden('_method', 'PUT')}}
            {{Form::label('body', 'Body')}}
            {{Form::textArea('body', $post->body, ['id' => 'summary-ckeditor','class' => 'form-control', 'placeholder' => 'BodyText'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection