<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show Contact Site Page
     *
     * @return view
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Sending Email
     * Send Contact us form
     *
     * @return view
     */
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|min:3|max:150|email',
            'subject' => 'required|min:3|max:200',
            'message' => 'required|min:10|max:10000',
        ]);

        try {
            Mail::raw("Name: " . $request->name. "\n" .
                "Email: " . $request->email . "\n \n" .
                $request->message
            , function ($message) use($request) {
                $message->from('info@artcube-af.com', $request->name);
                $message->to(config('social.email'), 'ArtCube Website');
                $message->replyTo($request->email, $request->name);
                $message->subject($request->subject);
                $message->priority(3);
            });
        } catch (Exception $ex) {
            return back()->withFail($ex->getMessage());
        }

        return back()->withSuccess('Your message has been sent. we will contact you back soon.');
    }
}
