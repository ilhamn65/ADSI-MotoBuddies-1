<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MyBookingsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }



    public function index(Request $request)
    {
        $bookings = $request->user()->bookings()->paginate(5);
        return view(
            'mybookings.index',
            [
                'bookings' => $bookings,
            ]
        );
    }
}
