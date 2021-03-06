<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store() 
    {
        // validate the form
        $this->validate(request(), [
            'name' => 'required|max:25',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        // create and save the user.
        $user = User::create(request(['name', 'email', 'password']));
        // Sign in
        auth()->login($user);
        // redirect
        return redirect()->home();
    }
}
