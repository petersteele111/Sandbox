<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = Auth::user()->name;
        $albums = DB::table('users')
            ->join('albums', 'user.id', '=', 'albums.users')->get();
        return view('static.home')->with('name', $name);
    }

    public function logout() {
       Auth::logout();
       return redirect('/')->with('status', 'Thank you for visiting. You have been logged out!');
    }
}
