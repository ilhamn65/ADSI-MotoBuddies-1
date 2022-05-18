<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AddVehicleController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function index()
    {
        return view('profile.add-vehicle');
    }

    public function store(Request $request)
    {

        $this->validate(
            $request,
            [
                'tipe' => 'required',
                'merek' => ['required', 'max:255'],
                'model' => 'required|max:255',
                'plat_nomor' => ['required', 'max:255']

            ]
        );


        $request->user()->kendaraans()->create($request->only('tipe', 'merek', 'model', 'plat_nomor'));

        return   $request->route == "book" ? redirect()->route('book') : redirect()->route('profile');
    }
}
