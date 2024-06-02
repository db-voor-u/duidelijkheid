<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class ContactController extends Controller
{
    public function index()
    {
        // Toon het contactformulier
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:3',
        ]);

        // Maak een nieuwe ContactUs Mailable
        $email = new ContactUs($validatedData['name'], $validatedData['email'], $validatedData['message']);
        Mail::to('receptieemail@mail.com')->send($email);

        return redirect()->back()->with('success', 'Bedankt voor uw bericht. We nemen zo snel mogelijk contact met u op.');
    }
}
