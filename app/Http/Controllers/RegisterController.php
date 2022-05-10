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
        $this->validate(
            $request,
            [
                'fname' => 'required|max:255',
                'lname' => 'required|max:255',
                'email' => 'required|email|max:255',
                'birthdate' => 'required',
                'password' => 'required|confirmed|max:255',
                'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:255'
            ]
        );


        //sign up

        //sign

        //redirect to dashboard

    }
}
