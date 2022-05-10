<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validate form
        $this->validate($request, ['username' => 'required|max:255']);
        $this->validate($request, ['email' => ['required', 'email', 'max:255']]);
        $this->validate($request, ['password' => 'required|confirmed|max:255']);

        //sign up

        //sign

        //redirect to dashboard

    }
}
