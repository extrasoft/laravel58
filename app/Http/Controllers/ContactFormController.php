<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create() {
        return view('contact.create');
    }

    public function store() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // dd(request()->all());
        Mail::to(request()->email)->send(new ContactFormMail($data)); //pass $data
        
        session()->flash('message','Thanks for your message. We\'ll be in touch');
        // or return redirect('contact')->with('message','Thanks for your message. We\'ll be in touch');

        return redirect('contact'); //contact.index
    }
}
