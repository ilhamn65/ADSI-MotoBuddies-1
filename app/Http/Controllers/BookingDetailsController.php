<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingDetailsController extends Controller
{
    public function index(Booking $booking)
    {


        return view('mybookings.details', [
            'booking' => $booking,
            'bookedServices' => $booking->booked_services
        ]);
    }
}
