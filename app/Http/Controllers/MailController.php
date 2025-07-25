<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mails = Mail::all();
        return view('Contact.emails', compact('mails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Contact.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            "name" => "required|string|max:20",
            "email" => "required|unique:mails,email",
            "phone" => "required",
            "email_priority" => "required",
            "message" => "required|max:1050",
        ]);


        Mail::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "email_priority" => $request->email_priority,
            "message" => $request->message,
        ]);

        return back();

    }

    public function filterEmail(Request $request) {
        
        $emailPriority = $request->emailPriority;
        $isRead = $request->isRead;
        $sortOrder = $request->sortOrder;

        $query = Mail::query();


        if($emailPriority != 'all'){
            $query->where('email_priority', $emailPriority)->get();
        }

       if($isRead != 'all'){
            $query->where('is_read', $isRead)->get();
       }


       if($sortOrder == 'oldest'){
            $query->orderBy('created_at', 'asc')->get();
       }else{
            $query->orderBy('created_at', 'desc')->get();
       }
        $mails = $query->get();

        return view('Contact.emails', compact('mails'));


    }

    /**
     * Display the specified resource.
     */
    public function show(Mail $mail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mail $mail)
    {
    
        $mail->update([
            "is_read" => $request->is_read ? true : false
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mail $mail)
    {
        //
        $mail->delete();
        return back();
    }
}
