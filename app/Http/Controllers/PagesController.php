<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function getIndex() {
        //Returns view for index page
        return view('static.welcome');
    }

    public function getAbout() {
        //Returns view for about page
        return view('static.about');
    }

    public function getPortfolio() {
        //Returns view for portfolio
        return view('static.portfolio');
    }

    public function getContact() {
        //Returns view for contact page
        return view('static.contact');
    }

    public function postContact() {

    }
}
