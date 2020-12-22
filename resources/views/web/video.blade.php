@extends('layouts.app_basic')


@section('content')
	<div class="w-screen h-screen bg-black">
	<iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/{{$video->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
@endsection