<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {

        $vehicles = $request->user()->kendaraans()->paginate(5);
        return view(
            'profile.index',
            ['vehicles' => $vehicles]
        );
    }
}
