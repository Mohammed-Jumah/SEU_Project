<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|max:255|string',
            'email' => 'required|email|unique:users|string',
            'password' => 'required|min:6|confirmed|string',
            'api_token' =>Str::random(60),
        ]);
        
        $user = User::create(request(['name', 'email', 'password', 'api_token']));
        
        auth()->login($user);
        
        return redirect()->to('/dashboard')->withSuccess('Great! You have Successfully Registration');
    }
}
