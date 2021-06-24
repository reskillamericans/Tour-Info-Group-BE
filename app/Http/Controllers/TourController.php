<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tour;

class TourController extends Controller
{
    public function view_all_tours()
    {
	    $tours = tour::all();

        return view('index', ['tours' => $tours]);
    }

    public function view_tours_by_location(Request $request)
    {
	    $location = $request->location;

	    $view_tours_location = tour::where('location', '=', $request->location)->get();

	    return view('location', ['view_tours_location' => $view_tours_location, 'location' => $location]);
    }

    /* public function search_tour_by_location($location)
    {
        //
    }*/
}
