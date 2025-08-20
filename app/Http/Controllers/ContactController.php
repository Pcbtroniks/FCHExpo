<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function sendContactEmail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:64',
            'message' => 'required|string',
        ]);

        // Here you would typically send the email using a Mailable class
        Mail::to('expo@fch-hotels.com')->send(new \App\Mail\ContactMail($data));

        return redirect()->back()->with('success', 'Nos pondremos en contacto contigo a la brevedad.');
    }
}
