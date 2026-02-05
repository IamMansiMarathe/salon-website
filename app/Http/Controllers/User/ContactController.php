<?php

namespace App\Http\Controllers\User;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
     public function showForm()
    {
        return view('user.pages.contact'); // your front-end contact page
    }

    // Store contact from front-end form
    public function store(Request $request)
{
    $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Save to DB
    Contact::create($request->all());

    // Send Email
    Mail::raw(
        "Name: {$request->name}\n".
        "Email: {$request->email}\n".
        "Subject: {$request->subject}\n\n".
        "Message:\n{$request->message}",
        function ($message) {
            $message->to('mansimarathe22@gmail.com')
                    ->subject('New Contact Message');
        }
    );

        return back()->with('success', 'Your message has been sent successfully!');
    }

    
}
