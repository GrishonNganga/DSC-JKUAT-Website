@extends('inc.template')
@section('content')
    @include('inc.navbar') 
    <section id="workshops" class="section-spacer workshops-section"> 
        <div class="container">
            <header class="section-header text-center">
                <h2 class="section-title wow fadeInUp">Events & Workshops</h2>
                <p class="section-subtitle wow fadeInUp">Come learn, share and connect with us in person.</p>
            </header>

            <div class="workshops-type-switch">
                <ul class="nav nav-pills justify-content-center js-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#my_events">My Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#all_events">All Events</a>
                    </li>
                </ul>
            </div>
            @if(!Auth::guest())
                <div class="tab-content">
                    <div class="tab-pane active" id="my_events" role="tabpanel" aria-labelledby="my_events">
                        <div class="row">
                            @foreach ($eventLists as $event)
                                <div class="col-md-4 col-12">
                                    <div class="card event-card wow fadeInUp">
                                        <a class="text-white" href="/events/{{$event->id}}">
                                        <img alt="Event poster" class="card-img-top" src="/storage/photo/{{$event->photo}}">
                                        <div class="card-body">
                                            <p class="tagging intermediate float-right">{{$event->skill}}</p>
                                            <h5 class="card-title">{{$event->title}}</h5>

                                            <table>
                                                <tr>
                                                    <td width="15%" class="text-blue"><i class="far fa-calendar-alt"></i></td>
                                                    {{$event->date}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-red"><i class="fas fa-map-marker-alt"></i></td>
                                                    <td>{{$event->location}}, Main Campus</td>
                                                <tr>
                                                    <td class="text-green"><i class="far fa-clock"></i></td>
                                                    <td>{{$event->time}}</td>
                                                </tr>
                                            </table>

                                            @if($event)
                                            {!!Form::open(['action' => ['AttendanceController@destroy', $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Attending', ['class' => 'button float-right'])}}
                                            {!!Form::close()!!}
                                            @endif
                                        </div></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" id="all_events" role="tabpanel" aria-labelledby="all_events">
                        <div class="row">
                            @foreach ($events as $event)
                                <div class="col-md-4 col-12">
                                    <div class="card event-card wow fadeInUp">
                                        <a class="text-white" href="/events/{{$event->id}}">
                                        <img alt="Event poster" class="card-img-top" src="/storage/photo/{{$event->photo}}">
                                        <div class="card-body">
                                            <p class="tagging intermediate float-right">{{$event->skill}}</p>
                                            <h5 class="card-title">{{$event->title}}</h5>

                                            <table>
                                                <tr>
                                                    <td width="15%" class="text-blue"><i class="far fa-calendar-alt"></i></td>
                                                    {{$event->date}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-red"><i class="fas fa-map-marker-alt"></i></td>
                                                    <td>{{$event->location}}, Main Campus</td>
                                                <tr>
                                                    <td class="text-green"><i class="far fa-clock"></i></td>
                                                    <td>{{$event->time}}</td>
                                                </tr>
                                            </table>

                                            @if($event)
                                            {!!Form::open(['action' => ['AttendanceController@store', 'id' => $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::submit('Attend', ['class' => 'button float-right'])}}
                                            {!!Form::close()!!}
                                            @endif
                                        </div></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>                  
            @else
            <div class="tab-content">
            <div class="tab-pane active" id="my_events" role="tabpanel" aria-labelledby="my_events">
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-md-4 col-12">
                        <div class="card event-card wow fadeInUp">
                            <a class="text-white" href="/events/{{$event->id}}">
                            <img alt="Event poster" class="card-img-top" src="/storage/photo/{{$event->photo}}">
                            <div class="card-body">
                                <p class="tagging intermediate float-right">{{$event->skill}}</p>
                                <h5 class="card-title">{{$event->title}}</h5>

                                <table>
                                    <tr>
                                        <td width="15%" class="text-blue"><i class="far fa-calendar-alt"></i></td>
                                        {{$event->date}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-red"><i class="fas fa-map-marker-alt"></i></td>
                                        <td>{{$event->location}}, Main Campus</td>
                                    <tr>
                                        <td class="text-green"><i class="far fa-clock"></i></td>
                                        <td>{{$event->time}}</td>
                                    </tr>
                                </table>

                                @if($event)
                                {!!Form::open(['action' => ['AttendanceController@store', 'id' => $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::submit('Attend', ['class' => 'button float-right'])}}
                                {!!Form::close()!!}
                                @endif
                            </div></a>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif                             
        </section>
    </div>
@endsection