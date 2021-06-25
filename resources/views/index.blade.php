<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tours</title>
    </head>
    <body>
    <b>View All Tours</b> <br>
    @if (count($tours) > 0)
        @foreach ($tours as $tour)
	    Title: {{ $tour->title }} <br>
	    Description: {{ $tour->description }} <br>
	    Location: {{ $tour->location }} <br> <br>
        @endforeach
    @else
	    No Tours. <br> <br>
    @endif

    <b>View Tours By Location</b> <br>
    <a href="/location/California">California</a> <a href="/location/Texas">Texas</a> <a href="/location/New York">New York</a> <br> <br>

    <form action="{{ route('search_location') }}"", method="GET"> 
        <b><label for="site-search">Search By Location:</label></b> <br>
        <input type="search" id="search_title" name="search_title" aria-label="Search">
        <select name="search_location" id="search_location">
            <option value="California">California</option>
            <option value="New York">New York</option>
            <option value="Texas">Texas</option>
        </select>
        <input type="submit" value="Search"> <br> <br>
    </form>
    </body>
</html>
