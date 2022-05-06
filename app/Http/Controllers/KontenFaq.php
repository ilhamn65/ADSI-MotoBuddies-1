<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontenFaq extends Controller
{
    public function index()
    {
        return view('FAQ.index');
    }
}
