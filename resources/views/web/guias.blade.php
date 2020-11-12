@extends('layouts.app')

@section('content')
<!-- component -->
<div class="max-w-screen-xl mx-auto">

	<section class="my-8 font-sans container m-auto">
		<div class="text-center">
			<h1 class="my-4 font-medium text-4xl">Guias Barcelona To</h1>
			<p class="leading-normal mb-4 max-w-sm m-auto">Información concreta, muchissimos tips, lugares secretos, histórias, mitos y leyendas...</p>
			<p class="leading-normal mb-4 max-w-sm m-auto">Viajar és, más allá de lo declarado por la Unesco, la curiosidad por el modo de vida de otras personas, curiosidad de ver fluir la naturaleza, és emocionarse, aprender...</p>
		</div>
		<div class="flex flex-col sm:flex-row flex-wrap justify-between px-20 my-8">
			<div class="w-full text-center">
				<h1 class="my-4 font-medium text-3xl">Europa</h1>
			</div>
			@foreach($europa as $country)
			<div class="w-full sm:w-1/2 md:w-1/4 flex flex-col items-center justify-center h-48 md:h-64 border-gray-300 m-4 border-r border-b hover:shadow-md hover:border-0 bg-white hover:transform-scale-subtle transition-normal hover:show-child">
				<div class="w-12 h-12 rounded-full bg-gray-300"></div>
				<h3 class="mt-4 mb-1">{{ $country->name }}</h3>
			</div>
			@endforeach
			<div class="w-full text-center">
				<h1 class="my-4 font-medium text-3xl">Asia</h1>
			</div>
			@foreach($asia as $country)
			<div class="w-full sm:w-1/2 md:w-1/4 flex flex-col items-center justify-center h-48 md:h-64 border-gray-300 m-4 border-r border-b hover:shadow-md hover:border-0 bg-white hover:transform-scale-subtle transition-normal hover:show-child">
				<div class="w-12 h-12 rounded-full bg-gray-300"></div>
				<h3 class="mt-4 mb-1">{{ $country->name }}</h3>
			</div>
			@endforeach
			<div class="w-full text-center">
				<h1 class="my-4 font-medium text-3xl">America del Norte</h1>
			</div>
			@foreach($northAmerica as $country)
			<div class="w-full sm:w-1/2 md:w-1/4 flex flex-col items-center justify-center h-48 md:h-64 border-gray-300 m-4 border-r border-b hover:shadow-md hover:border-0 bg-white hover:transform-scale-subtle transition-normal hover:show-child">
				<div class="w-12 h-12 rounded-full bg-gray-300"></div>
				<h3 class="mt-4 mb-1">{{ $country->name }}</h3>
			</div>
			@endforeach
			<div class="w-full text-center">
				<h1 class="my-4 font-medium text-3xl">America del sur</h1>
			</div>
			@foreach($southAmerica as $country)
			<div class="w-full sm:w-1/2 md:w-1/4 flex flex-col items-center justify-center h-48 md:h-64 border-gray-300 m-4 border-r border-b hover:shadow-md hover:border-0 bg-white hover:transform-scale-subtle transition-normal hover:show-child">
				<div class="w-12 h-12 rounded-full bg-gray-300"></div>
				<h3 class="mt-4 mb-1">{{ $country->name }}</h3>
			</div>
			@endforeach
			<div class="w-full text-center">
				<h1 class="my-4 font-medium text-3xl">Oceania</h1>
			</div>
			@foreach($oceania as $country)
			<div class="w-full sm:w-1/2 md:w-1/4 flex flex-col items-center justify-center h-48 md:h-64 border-gray-300 m-4 border-r border-b hover:shadow-md hover:border-0 bg-white hover:transform-scale-subtle transition-normal hover:show-child">
				<div class="w-12 h-12 rounded-full bg-gray-300"></div>
				<h3 class="mt-4 mb-1">{{ $country->name }}</h3>
			</div>
			@endforeach
			
		</div>
	</section>

<div>


@endsection