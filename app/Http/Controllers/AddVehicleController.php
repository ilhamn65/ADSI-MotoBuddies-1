<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class AddVehicleController extends Controller
{
    public function index()
    {
        return view('profile.add-vehicle');
    }

    public function store(Request $request)
    {

        $this->validate(
            $request,
            [
                'tipe' => ['required', 'max:255'],
                'merek' => 'required|max:255',
                'model' => 'required|max:255',

            ]
        );


        $request->user()->kendaraans()->create($request->only('tipe', 'merek', 'model'));

        return   $request->route == "book" ? redirect()->route('book') : redirect()->route('profile');
    }
}
