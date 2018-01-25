<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DiveMail;
use Mail;
use Validator;

class EmailController extends Controller
{
    public function email(Request $request){
        $validatedData = Validator::make($request->all(), [
            'title' => 'required|min:5|max:200',
            'tel' => 'required|min:5|numeric',
            'email' => 'email|min:5',
            'message' => 'required|min:5|max:500'
        ]);

        if ($validatedData->fails())
        {
            return redirect()->back()->withErrors($validatedData->errors());
        } else {
            Mail::to('devine_admin@divine.com')->send(new DiveMail($request->title, $request->tel, $request->email, $request->message));

        }

        //return redirect('contact');
    }
}
