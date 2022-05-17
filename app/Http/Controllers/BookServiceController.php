<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookServiceController extends Controller
{
    public function index()
    {

        $vehicles = auth()->user()->kendaraans;

        return view('book.index', [
            "vehicles" => $vehicles,
        ]);
    }



    public function store(Request $request)
    {

        dd($request->vehicle);
    }
}
