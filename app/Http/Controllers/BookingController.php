<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;

class BookingController extends Controller
{
    public function bookingSuccess()
    {
        return view('booking-success');
    }
}
