<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tours</title>
    </head>
    <body>
    <a href="/">Home</a> <br> <br>
    <b>View {{ $location }} Tours</b> <br>
    @if (count($view_tours_location) > 0)
        @foreach ($view_tours_location as $tour_location)
	    Title: {{ $tour_location->title }} <br>
	    Description: {{ $tour_location->description }} <br>
	    Location: {{ $tour_location->location }} <br> <br>
        @endforeach
    @else
	    No Tours. <br><br>
    @endif
    </body>
</html>
