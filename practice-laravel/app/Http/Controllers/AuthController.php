<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'username' => ['required','max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed']

        ]);
        $user = User::create($fields);

        Auth::login($user);

        return redirect()->route('home');
        dd('ok');
    }
    public function login(Request $request){
        $fields = $request->validate([
            'email' => ['required','max:255','email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($fields, $request->remember)){
            return redirect()->route('dashboard');
        } else {
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records'
            ]);
        }
    }

    public function logout(Request  $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
