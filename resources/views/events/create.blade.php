@extends('inc.template')
@include('inc.messages')
@section('content')
<div class="container">
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
        <div>
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
        <div class="form-group">
            <input type="file" name="file[]" multiple/>
        </div>
        
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
    <script>
        var form = document.getElementById('upload');
        var request = new XMLHttpRequest();
        form.addEventListener('Submit', function(e){
            e.preventDefault();
            var formdata =  new FormData(form);
            request.open('post', 'EventsController@store');
            request.addEventListener("load", transferComplete);
            request.send(formdata);
        });

        function transferComplete(data){
            data.currentTarget.response;
        }
    </script>
@endsection