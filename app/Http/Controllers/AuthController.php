<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;
use Auth;

class AuthController extends Controller
{
    
    public function login(){


        if(Auth::check() === true){
            //return view('admin.login');
            $pessoas = Pessoa::all();
            return view('list-pessoas', compact('pessoas'));
        }

        return redirect()->route('admin.login');
    }

    public function loginForm(){
        
        return view('admin.loginForm');
    }

    public function autentica(Request $request){

        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return redirect()->back()->withInput()->withErrors(['O e-mail informado não é valido.']);
        }

        $credencial = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credencial)){

            return redirect()->route('admin');
        }

        return redirect()->back()->withInput()->withErrors(['Os dados informados não coferem.']);
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('admin');
    }
}
