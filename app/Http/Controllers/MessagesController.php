<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit (Request $request){
        $this->validate($request, [
            "name" => "required",
            "email"=> "required",
        ]);
        
        // Create a New Message
        $message = new Message;
        $message->name = $request->input("name");
        $message->email = $request->input("email");
        $message->message = $request->input("message");
        
        // Save Message
        $message -> save();
        
        // Redirect
        return redirect("/") -> with("success", "Mensagem Enviada");
        
        // Testes
        //print_r ($request["name"]);
        //echo "<br>";
        //echo "<br>";
        //print_r ($message->message);
    }
    
    
    public function getMessages(){
        $messages = Message::all();
        return view("messages")->with("messages", $messages);
    }
}
