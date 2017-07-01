<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    public function login(Request $request){
        if ($request->method('post')){
            $email      = $request->email;
            $password   = $password;
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                // Аутентификация успешна
             return redirect()->intended('/');
            }else{
                return view('login', ['error' => 'error']);
            }
        }
    }
}
