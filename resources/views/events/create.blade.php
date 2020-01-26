@extends('inc.template')
@include('inc.messages')
@section('content')
    <h1>Create Event</h1>
    {!! Form::open(['action' => 'EventsController@store', 'method' =>'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textArea('description', '', ['class' => 'form-control', 'placeholder' => 'Information about the event'])}}
        </div>
        <div class="form-group">
            {{Form::label('date', 'Date')}}
            {{Form::text('date', '', ['class' => 'form-control', 'placeholder' => 'Date of the event'])}}
        </div>
        <div class="form-group">
            {{Form::label('time', 'Time')}}
            {{Form::text('time', '', ['class' => 'form-control', 'placeholder' => 'Time of the event'])}}
        </div>
        <div class="form-group">
            {{Form::label('location', 'Location')}}
            {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Location of the event'])}}
        </div>
        <div class="form-group">
            {{Form::label('skill', 'Skill level')}}
            {{Form::text('skill', '', ['class' => 'form-control', 'placeholder' => 'Skill level required for the event'])}}
        </div>
        <div class="form-group">
            {{Form::file('photo')}}
        </div>
        
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection