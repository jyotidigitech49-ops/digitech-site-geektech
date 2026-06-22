<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contactus.contact');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new contact entry in the database
        Contact::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'subject' => $validatedData['subject'],
            'msg' => $validatedData['message'],
            'ip_address' => $request->ip(),
            'inserted_at' => now(),
        ]);

         // Send Email-on Contact Form Submission
        // Mail::raw(
        //     "Name: {$request->name}\n".
        //     "Email: {$request->email}\n\n".
        //     "{$request->message}",
        //     function ($mail) use ($request) {
        //         $mail->to('your@email.com')
        //              ->subject($request->subject);
        //     }
        // );

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
