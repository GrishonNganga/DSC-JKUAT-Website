<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use DB;
use Auth;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth', ['except' => 'index']);
    }
    public function index()
    {
        $events = Event::all();
        if(auth::check()){
            $eventNotAttendList = $events->reject(function ($attending){
                $eventAttendList = DB::table('events')
                ->join('event_user', 'event_user.event_id', '=', 'events.id')
                ->where("event_user.user_id", "=", auth()->user()->id)
                ->get();
                foreach($eventAttendList as $eventAttending){                    
                    if($attending->id == $eventAttending->event_id){
                        return true;
                    }
                }
                
            });
            $eventToAttendList = $events->filter(function ($eventNotAttending){
                $eventAttendList = DB::table('events')
                ->join('event_user', 'event_user.event_id', '=', 'events.id')
                ->where("event_user.user_id", "=", auth()->user()->id)
                ->get();
                foreach($eventAttendList as $eventAttending){                    
                    if($eventNotAttending->id == $eventAttending->event_id){
                        return true;
                    }
                }
                
            });
            return view('events.index')->with([
                'events' => $eventNotAttendList,
                'eventLists' => $eventToAttendList,
                
                ]);
        }else{
            return view('events.index')->with('events', $events);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'photo' => 'image|nullable|max:1999',
            'title' => 'required',
            'date' => 'required',
            'location' => 'required',
            'time' => 'required',
            'skill' => 'required',
            'description' => 'required' 
        ]);
        if($request->hasFile('photo')){
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileTosStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('photo')->storeAs('public/photo', $fileTosStore);
        }
        else{

            $fileTosStore = 'nocover.jpg';
        }
        $event = new Event;
        $event->user_id = auth()->user()->id;
        $event->photo = $fileTosStore;
        $event->title = $request->input('title');
        $event->date = $request->input('date');
        $event->description = $request->input('description');
        $event->location = $request->input('location');
        $event->time = $request->input('time');
        $event->skill = $request->input('skill');
        $event->save();

        return redirect('admin/')->with('success', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}

   