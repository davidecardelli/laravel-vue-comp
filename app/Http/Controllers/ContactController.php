<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'email' => 'bail|required|email',
            'subject' => 'bail|required|string',
            'message' => 'bail|required|string',
            'subscribe' => 'nullable|boolean'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        if (Arr::exists($data, 'subscribe')) {
            $exists = Contact::where('email', $data['email'])->count();
            if (!$exists) {
                $contact = new Contact();
                $contact->email = $data['email'];
                $contact->save();
            }
        }

        $email = new ContactMessageMail(
            sender: $data['email'],
            subject: $data['subject'],
            message: $data['message']
        );

        Mail::to(env('MAIL_FROM_ADDRESS'))->send($email);
        return response(null, 201);
    }
}
