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
    public function getIndex()
    {

        $name = Auth::user()->name;
        $user = Auth::user()->id;
        $album = App\User::find($user)->albums;
        $photo = App\User::find($user)->photos;
        $data = array(
            'name' => $name,
            'albums' => $album,
            'photos' => $photo,
        );
        return view('static.home')->with($data);
    }

    public function logout() {
       Auth::logout();
       return redirect('/')->with('status', 'Thank you for visiting. You have been logged out!');
    }
}
