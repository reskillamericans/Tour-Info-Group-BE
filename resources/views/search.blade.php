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
    <b>View {{ $search_location }} Tours</b> <br>
    @if (count($search_tours_location) > 0)
        @foreach ($search_tours_location as $search_tour_location)
	        Title: <a href="/tour/{{ $search_tour_location->id }}">{{ $search_tour_location->title }}</a> <br>
	        Description: {{ $search_tour_location->description }} <br>
	        Location: {{ $search_tour_location->location }} <br> <br>
        @endforeach
        {{ $search_tours_location->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
    @else
	    No Tours. <br><br>
    @endif
    </body>
</html>
