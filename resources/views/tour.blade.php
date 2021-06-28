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
    <b>View Tour</b> <br>
    @if (count($view_tour) > 0)
        @foreach ($view_tour as $tour_details)
	    Title: {{ $tour_details->title }} <br>
	    Description: {{ $tour_details->description }} <br>
	    Location: {{ $tour_details->location }} <br> <br>
        @endforeach
    @else
	    Tour doesn't exist. <br><br>
    @endif
    </body>
</html>
