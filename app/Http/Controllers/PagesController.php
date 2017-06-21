<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

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

    //Grabs data from contact form, validates it, sets it up to be passed into an email view, and sends the data via email.
    public function postContact(Request $request) {
        //Get data from contact form and validate it
        $this->validate($request, [
            //Must match name="" in form input
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Telephone' => 'min:10',
            'Email' => 'required | email',
            'Question' => 'required | min:20'
        ]);

        //Create array of contact form data to pass to Mail class
        $contact = array(
            //Can be named whatever I want on first variables. Make sure to use the same name in the email blade template file for it to work.
            'First_Name' => $request->First_Name,
            'Last_Name' => $request->Last_Name,
            'Telephone' => $request->Telephone,
            'Email' => $request->Email,
            'Question' => $request->Question
        );

        //Defines the email header information, defines what email view to use, and pulls in the form data to be used
        Mail::send('emails.contact', $contact, function($message) use ($contact){
            $message->from($contact['Email']);
            $message->to('info@eupphoto.com');
            $message->subject('Online Contact Form');
        });

        return redirect('/')->with('status', "Thank you for your message. We will be in touch with you shortly.");
    }
}
