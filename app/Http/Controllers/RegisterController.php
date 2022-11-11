<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    //Vista
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.register');
    }
    //Se envia una requesta para validar
    public function register(RegisterRequest $request){
        $user= User::create($request->validated());
        return redirect('/login')->with('success','Account created successfully');
    
}
}