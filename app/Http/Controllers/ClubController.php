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
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send email or save to database
        Mail::to('your-email@example.com')->send(new ContactFormMail($request->all()));

        return redirect()->route('club.contact')->with('success', 'Your message has been sent successfully!');
    }
}