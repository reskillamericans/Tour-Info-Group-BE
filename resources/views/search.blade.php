<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <title>Tours</title>
    </head>
    <body>
    <a href="/">Home</a> <br> <br>
    <b>View {{ $search_location }} Tours</b> <br>
    @if (count($search_tours_location) > 0)
        @foreach ($search_tours_location as $search_tour_location)
	    Title: {{ $search_tour_location->title }} <br>
	    Description: {{ $search_tour_location->description }} <br>
	    Location: {{ $search_tour_location->location }} <br> <br>
        @endforeach
        {{ $search_tours_location->appends(request()->except('page'))->links() }}
    @else
	    No Tours. <br><br>
    @endif
    </body>
</html>
