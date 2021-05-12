<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'between:8,255', 'confirmed']
        ],
        [
            'name.required' => 'Nazwa profilu jest wymagana',
            'email.required' => 'Podaj poprawny adres e-mail',
            'password.required' => 'Błędne hasło lub jego brak'
        ]
    );

        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return response()->json(Auth::user(), 200);
        }
        throw ValidationException::withMessages([
            'email' => ['Niepoprawne dane']
        ]);
    }
}
