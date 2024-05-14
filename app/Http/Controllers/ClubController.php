<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ClubController extends Controller
{
    public function index()
    {
        return view('club.index');
    }

    public function contact()
    {
        return view('club.contact');
    }

    public function submitContact(Request $request)
    {
        $contactData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|not_in:,',
            'message' => 'required|string',
        ]);

        // Send email or save to database
        Mail::to('flore-jan_smeets@hotmail.com')->send(new ContactFormMail($contactData));

        return redirect()->route('club.contact')->with('success', 'je bericht is goed ontvangen. Wij zullen hier spoedig op antwoorden.');
    }
}