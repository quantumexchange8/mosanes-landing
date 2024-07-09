<?php

namespace App\Http\Controllers;

use App\Notifications\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function showContact()
    {
        return view('page.company.contact')->with([
            'title' => 'Contact Us',
        ]);
    }

    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'string'],
        ]);

        Notification::route('mail', 'test@test.com')->notify(new ContactNotification($request));

        return redirect()->back()->with('success', 'Email has sent!');
    }
}
