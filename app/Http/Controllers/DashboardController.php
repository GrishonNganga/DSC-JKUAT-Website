<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //The auth middleware redirects requests to login page if the user is not logged in
        //The verified middleware ensures that the authed user trying to access this routes is an admin,
        //  if is not is redirected back to home.
        
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $posts = $user->posts;
        $user = $user->name;
        return view('pages.index')->with('user', $user);
    }
}
