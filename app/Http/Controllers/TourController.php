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

	    $view_tours_location = tour::where('location', '=', $location)->get();

	    return view('location', ['view_tours_location' => $view_tours_location, 'location' => $location]);
    }

   public function redirect_search_tour_by_location(Request $request)
    {
	    $search_title = $request->search_title; 

	    $search_location = $request->search_location;   

	    return redirect()->route('search', [$search_title, $search_location]);
    }

   public function search_tour_by_location($search_title, $search_location)
    {  
	    $search_tours_location = tour::where('location', '=', $search_location)->where('title', 'LIKE', "%" . $search_title . "%")->paginate(10);

	    return view('search', ['search_tours_location' => $search_tours_location, 'search_title' => $search_title, 'search_location' => $search_location]);
    }
}
