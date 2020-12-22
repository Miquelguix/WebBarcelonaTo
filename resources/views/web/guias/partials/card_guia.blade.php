<div class="relative flex flex-col items-center justify-center w-full m-4 bg-white border-b border-r border-gray-300 rounded-md sm:w-1/2 md:w-1/4 hover:shadow-md hover:border-0 hover:transform-scale-subtle transition-normal hover:show-child">
	<img src="{{url('/images/countries/' . $country->countrySlug . '.jpg')}}" alt="" class="z-0 object-cover w-full rounded-md h-96">
	<div class="absolute w-full text-center">
		<h3 class="mt-4 mb-1">{{ $country->name }}</h3>

		{{-- <div class="w-24 h-24 rounded-full"><img src="{{url('/images/flags/svg/' . $country->countrySlug . '.svg')}}" alt="bandera de {{ $country->name }}"/></div> --}}
		<div class="flex w-full justify-evenly">
			{{-- <a href="{{ route('scrap_dades', $country->gob_id) }}" class="px-4 py-2 font-semibold tracking-wider text-white bg-blue-400 border rounded-lg shadow-lg focus:outline-none focus:shadow-outline hover:bg-blue-300 active:bg-blue-800">Scraping {{ $country->gob_id }}</a> --}}
			@isset($country->visados)
			<a href="{{ route('guia', $country->countrySlug) }}" class="px-4 py-2 font-semibold tracking-wider text-white bg-blue-400 border rounded-lg shadow-lg focus:outline-none focus:shadow-outline hover:bg-blue-300 active:bg-blue-800">Ver guia</a>
			@endisset
		</div>
	</div>
</div>