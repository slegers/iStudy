<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index()
    {  
        $user = User::find(1);  
        return view('profile',compact('user'));
    }

    public function edit($id){
        $user = User::find($id);    
        return view('auth.register',compact('user'));
    }
}
