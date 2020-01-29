<?php

namespace App\Http\Controllers;

use App\Event;
use App\Resource;
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
        $this->middleware(['auth', 'adminCheck'], ['except' => ['index', 'show']]);
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
        //Validates the contents of the form.
        $this->validate($request, [
            'photo' => 'image|nullable|max:1999',
            'title' => 'required',
            'date' => 'required',
            'location' => 'required',
            'time' => 'required',
            'skill' => 'required',
            'description' => 'required' 
        ]);
        
        //Checks for and uploads the image of the event
        if($request->hasFile('photo')){
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileTosStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('photo')->storeAs('public/photo', $fileTosStore);
        }
        else{

            //Default cove photo of the events in the case no image is provided.
            $fileTosStore = 'nocover.jpg';
        }
        //Storage of the actual event on the db.
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
                   
        //Get the id of the last event on the db so as to associate with the resources uploaded.
        //Big risk factor ignored... If there are more people who can upload events and they happen 
        //to upload events at the same time. There might be a risk of associating resources with the wrong event.
        //
        //  TO BE HANDLED IN FUTURE...
        //

        //Get the id of the last event
        $last_event = Event::all()->last();
        $last_event_id = $last_event->id;

        //Store the uploaded files on the storage location one by one.
        $files = $request->file('file');
        if(!empty($files)){
            foreach($files as $file){
                $file_nameWithExt = $file->getClientOriginalName();
                $fileName = pathinfo($file_nameWithExt, PATHINFO_FILENAME);
                $file_extension = $file->getClientOriginalExtension();
                $file_for_store = $fileName.'_'.time().'.'.$file_extension;
                $path = $file->storeAs('public/resource', $file_for_store);
                
                //Create the resources uploaded on the db one by one
                $resource = new Resource;
                $resource->file_name = $file_for_store;
                $resource->event_id = $last_event_id; 
                $resource->save();

            }
        }

        return redirect('admin/')->with('success', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        $attending = false;
        $counter = 0;
        $resources = Resource::all()->reject(function($resource) use ($event){
            if($resource->event_id != $event->id){
                return true;
            }
        });
        if(auth::check()){
            $userEvents = DB::table('events')
            ->join('event_user', 'event_user.event_id', '=', 'events.id')
            ->where("event_user.user_id", "=", auth()->user()->id)
            ->get();

            foreach($userEvents as $userEvent){
                if($userEvent->id == $id){
                    $counter = $counter + 1;
                }
            }
            if($counter >=1){
                $attending = true;
            }else{
                $attending = false;
            }
            return view('events.show')->with([
                'event' => $event,
                'resources' => $resources,
                'attendance' => $attending,
            
            ]);
        }else{
            return view('events.show')->with([
                'event' => $event,
                'resources' => $resources,
                'attendance' => $attending,
            
            ]);
        }
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

   