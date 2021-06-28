<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <title>Tours</title>
    </head>
    <body>
    <a href="/">Home</a> <br> <br>
    <b>View {{ $location }} Tours</b> <br>
    @if (count($view_tours_location) > 0)
        @foreach ($view_tours_location as $tour_location)
	        Title: <a href="/tour/{{ $tour_location->id }}">{{ $tour_location->title }}</a> <br>
	        Description: {{ $tour_location->description }} <br>
	        Location: {{ $tour_location->location }} <br> <br>
        @endforeach
    @else
	    No Tours. <br><br>
    @endif
    </body>
</html>
