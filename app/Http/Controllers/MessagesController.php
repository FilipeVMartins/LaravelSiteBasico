<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller{
    public function submit (Request $request){
        $this->validate($request, [
            "name" => "required",
            "email"=> "required",
        ]);
        
        // Criar nova mensagem
        $message = new Message;
        $message->name = $request->input("name");
        $message->email = $request->input("email");
        $message->message = $request->input("message");
        
        // Salvar mensagem criada
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
    
    public function deletMessages(Request $request){
        //obter os ID's para deletar
        $mensagensids = $request->all();
        //verificar se tem algo para deletear, usei >1 para começar depois do token.
        if (count($mensagensids)>1){
            //percorrer a array dos ids e deletar.
            foreach ($mensagensids as $messageid){
                Message::destroy($messageid);
            }
        } else{
            return redirect("/messages") -> with("success", "Nenhuma mensagem selecionada para exclusão");
        }
        return redirect("/messages") -> with("success", "As mensagens foram excluídas com sucesso.");
    }
}
