<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControll extends Controller
{ 
    public function submit(Request $request){
    $this->validate($request,[

    
    ]);
    
    //Create New Message 
    


    $user = new User;
    $user->name = Auth::user()->name;
   $user->reciver = $request->input('email');
   $user->title = $request->input('title');
    $user->message = $request->input('message');

    
    
    ///Save Message 
    $message->save();
    
    
    ///// Redirect
    
    return redirect('/dashboard')->with('success','Message has benn sent ');
    }

}
