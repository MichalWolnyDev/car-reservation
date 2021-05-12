<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ],
        [
            'email.required' => 'Podaj poprawny adres e-mail',
            'password.required' => 'Błędne hasło lub jego brak'
        ]
    );
        
        if(Auth::attempt($request->only('email', 'password'))){
            return response()->json(Auth::user(), 200);
        }
        throw ValidationException::withMessages([
            'email' => ['Niepoprawne dane']
        ]);
    }
    public function logout()
    {
        Auth::logout();
    }
}
