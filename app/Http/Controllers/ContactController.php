<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    //
    public function submit(Request $request){
         $validateData= $request->validate([
            'name'=> 'required', //'required|max:255|min:3',
            'email'=> ['required', 'email'], //Rule::unique('users', 'email') 
            'message'=> 'required'//['required', 'max:255'],
         ]);
         Mail::to('eaindraag.myn@gmail.com')->send( new ContactMail($validateData['name'], 
             $validateData['email'],$validateData['message']));
        return ['success' => true];
    }
  
}
