<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingSuccess()
    {
        return view('booking-success');
    }
}
