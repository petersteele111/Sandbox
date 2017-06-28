<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;

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
        $user = Auth::user()->id;
        $albums = App\User::find($user)->albums;
        $photos = App\User::find($user)->photos;
        $data = array(
            'name' => $name,
            'album' => $albums,
            'photo' => $photos,
        );
        return view('static.home')->with($data);
    }

    public function logout() {
       Auth::logout();
       return redirect('/')->with('status', 'Thank you for visiting. You have been logged out!');
    }
}
