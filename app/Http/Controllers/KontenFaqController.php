<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class KontenFaq extends Controller
{
    public function index()
    {
        // memanggil data faq dari database == error
        // $faq=Faq::all();
        // return view('FAQ.index', compact('faq'));
        return view('FAQ.index');
    }
}
