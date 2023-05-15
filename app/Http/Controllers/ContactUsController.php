<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    //Create contact form
    // public function createForm()
    // {
    //     return view('contact');
    // }

    // Store Contact Form data
    public function contactUsForm(Request $request)
    {
        // Form validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 400, 'msg' => $validator->errors()->first()]);
        }

        //  Store data in database
        Contact::create($request->all());

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'message' => $request->message,
        ];

        $receiver = "vaibhavblueocean@gmail.com";
        Mail::to($receiver)->send(new ContactMail($details));
        return response()->json(['code' => 200, 'msg' => 'We have received your message and would like to thank you for writing to us.']);
    }
}
