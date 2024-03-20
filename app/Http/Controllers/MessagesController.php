<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store( Request $request){
        $request->validate([
            'user_name'=> 'required | string | max:255',
            'email'=> 'required|email | string | max:30',
            'message'=> 'required| string',
        ]);

        $sms = new Messages();
        $sms -> user_name = $request->input('user_name');
        $sms -> email = $request->input('email');
        $sms -> message = $request->input('message');
        $sms->save();
        return to_route('Footer')->with('plus', 'supplier saved!');
    }
}
