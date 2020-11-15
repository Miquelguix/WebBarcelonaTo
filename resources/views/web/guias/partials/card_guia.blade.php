<div class="w-full rounded-md sm:w-1/2 md:w-1/4 flex flex-col items-center justify-center h-48 md:h-64 border-gray-300 m-4 border-r border-b hover:shadow-md hover:border-0 bg-white hover:transform-scale-subtle transition-normal hover:show-child">
	<div class="w-24 h-24 rounded-full"><img src="{{url('/images/flags/svg/' . $country->countrySlug . '.svg')}}" alt="bandera de {{ $country->name }}"/></div>
	<h3 class="mt-4 mb-1">{{ $country->name }}</h3>
	<div class="w-full flex justify-evenly">
		{{-- <a href="{{ route('scrap_dades', $country->gob_id) }}" class="px-4 py-2 bg-blue-400 shadow-lg border rounded-lg text-white font-semibold tracking-wider focus:outline-none focus:shadow-outline hover:bg-blue-300 active:bg-blue-800">Scraping {{ $country->gob_id }}</a> --}}
		@isset($country->visados)
		<a href="{{ route('guia', $country->countrySlug) }}" class="px-4 py-2 bg-blue-400 shadow-lg border rounded-lg text-white font-semibold tracking-wider focus:outline-none focus:shadow-outline hover:bg-blue-300 active:bg-blue-800">Ver guia</a>
		@endisset
	</div>
</div>