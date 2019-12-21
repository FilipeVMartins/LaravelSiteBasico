<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pagesController extends Controller
{
    public function getHome(){
        return view('home');
    }
    
    public function getAbout(){
        return view('about');
    }
    
    public function getContact(){
        return view('contact');
    }
    
    public function getSubmitdelet(){
        return redirect('/');
    }
    
    public function getLogout(){
        Auth::logout();
        return redirect('/');
               //view('/home');
    }
}
