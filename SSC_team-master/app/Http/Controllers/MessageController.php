<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Validator;
use Auth;
class MessageController extends Controller
{
   
    public function submit(Request $request){
        $this->validate($request,[
  
        
        ]);
        
        //Create New Message 
        


        $message = new Message;
        $message->name = Auth::user()->name;
       $message->reciver = $request->input('email');
       $message->title = $request->input('title');
        $message->message = $request->input('message');

        
        
        ///Save Message 
        $message->save();
        
        
        ///// Redirect
        
        return redirect('/dashboard')->with('success','Message has benn sent ');
        }
    


    ///////////////Get message in the DashBoard//////////////
        public function getMessages(){

            $messages = Message::where('reciver','=',Auth::user()->name)->get();
       
            return view('dashboard')->with('messages',$messages );}
        



            ////////////////Delete Message/////////////
            public function deleteMessages(Request $request,$id){

   $message = message::findOrFail($id);
   $message->delete();
   return redirect('/dashboard')->with('success','Message Deleted Successfuly');}
        


                ////////////////Showing Message on modal /////////////
                public function showmessage(Request $request){

                    $message = message::findOrFail($id);
                    
                    return ('$message');}
                
                
     }
        
  

    
 
    


     