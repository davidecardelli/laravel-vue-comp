<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
    }
}
