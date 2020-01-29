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
        //The auth middleware redirects requests to login page if the user is not logged in
        //The verified middleware ensures that the authed user trying to access this routes is an admin,
        //  if is not is redirected back to home.
        //The routes index and projects are not authed. They can be accessed by unauthed users.
        $this->middleware(['auth', 'verified'], ['except' => ['index', 'projects']]);
    }
    
    public function index(){
        /**
         * Default route first loaded.
         * 
         * If the user is not authed. 
         * The first 3 events are pulled from the db and displayed for the user.(Other criterias can be used in future)
         * 
         * If the user is logged in 
         * The first 3 events that the user has not signed up for are displayed.
         */
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
