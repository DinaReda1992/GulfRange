<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactUsController extends Controller
{
    public function index()
    {
        return view('emails.contactForm');

        // session()->flash('Sent', 'Email Sent successfully');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => ['required' , 'regex:/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/', 'max:14'],
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        return redirect('emails.contactForm')->with('status', 'Your Message was sent successfully');

  
        // return redirect()->back()
        //                  ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }

}
