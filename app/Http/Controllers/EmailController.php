<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DivineMail;
use Mail;
use Validator;
use Redirect;

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
            Mail::to('divinebrandofficial@gmail.com')->send(new DivineMail($request->title, $request->email, $request->tel, $request->message));

            return back()->with('msg', 'ข้อความของท่านถูกส่งเรียบร้อยแล้ว ทางเราจะรีบติดต่อกลับ ตามข้อมูลที่ท่านกรอก "DIVINE BRABD" ขอบคุณค่ะ ');
            //return redirect()->back()->('msg','ข้อความของท่านถูกส่งเรียบร้อยแล้ว ขอบคุณค่ะ');
        }
    }
}
