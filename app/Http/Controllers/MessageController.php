<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Mail\MessageMail;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Store Contact Message
     */
    public function store(Request $request)
    {
        // Validate Form Data
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'required|string|max:500',
            'message' => 'required|string',
        ]);

        // Save Message in Database
        $message = Message::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Send Email to Admin
        Mail::to('msasheraz@gmail.com')->send(new MessageMail($message));

        // Redirect Back
        return back()->with('success', 'Your message has been sent successfully. I will reach out to you soon!  Thank you for contacting me.');
    }
    public function index()
{
    // Sab unread messages ko read mark kar do
    Message::where('is_read', false)->update([
        'is_read' => true
    ]);

    // Messages fetch karo
    $messages = Message::latest()->get();

    // Blade file ko bhejo
    return view('admin-dashboard.message.index', compact('messages'));
}

}