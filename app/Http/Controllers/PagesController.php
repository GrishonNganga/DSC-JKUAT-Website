<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Event;
use DB;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'projects']]);
    }
    
    public function index(){
        $allEvents = Event::all();
        if(auth::check()){
            $eventNotAttendList = $allEvents->reject(function ($eventNotAttending){
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

            if(count($eventNotAttendList)<1){
                return view('pages.index')->with('events', $allEvents);
            }
            return view('pages.index')->with('events', $eventNotAttendList);
        }else
            return view('pages.index')->with('events', $allEvents->take(3));
    }
        
    public function projects(){
        return view('pages.coming');
    }

    public function participate(){
        return view('pages.participate');
    }
    public function resources(){
        return view('pages.resources');
    }
}
