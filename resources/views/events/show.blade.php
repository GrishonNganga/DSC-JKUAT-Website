@extends('inc.template')
@section('content')
    @include('inc.navbar')
    <div>
    <div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-5 ml-pic">
            <div class="img-thumbnail">
            <img style="width:100%" src="/storage/photo/{{$event->photo}}">
            </div>
        </div>
        <div class="col md-8 sm-2 mt-4">
            <p><h1>{{$event->title}}</h1><h3 class="tagging intermediate float-right">{{$event->skill}}</h3></p> 
            <h3> {{$event->location}}</h3>
            <h5> {{$event->date}}</h5></i>
            <p><h5> {{$event->description}}</h5></p>
            @if($attendance != true)
            {!!Form::open(['action' => ['AttendanceController@destroy', $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::submit('Attending', ['class' => 'button float-right'])}}
            {!!Form::close()!!}
        @else
            {!!Form::open(['action' => ['AttendanceController@store', 'id' => $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::submit('Attend', ['class' => 'button float-right'])}}
            {!!Form::close()!!}
        @endif
        @if(!Auth::guest())
            @if(Auth::user()->id == 1)
                <hr><a href="/events/{{$event->id}}/edit" class="btn btn-default">Edit</a>
                {!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
        </div>

    </div>
        <div class="row mt-3">
            <h3> Resources</h3>
            @if(count($resources) >0)
                @foreach ($resources as $resource)
                    <div> <br><br>
                        <a href="{{URL::to('/')}}/storage/resource/{{$resource->file_name}}">
                            <button class="btn"><i class="fa fa-download"></i>{{$resource->file_name}}</button> </a>&nbsp;
                    </div>
                        
                    @endforeach
                @else
                <div> <br><br>
                    No resources for this event are provided
                </a>&nbsp;
            </div>
                @endif
                
        </div>
            

    </div>
    </div>
</div>
@endsection