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
				<h1 class="my-4 font-medium text-3xl">EUROPA</h1>
			</div>

			@foreach($europa as $country)
				@include('web.guias.partials.card_guia')
			@endforeach

			<div class="w-full text-center">
				<h1 class="my-4 font-medium text-3xl">ASIA</h1>
			</div>

			@foreach($asia as $country)
				@include('web.guias.partials.card_guia')
			@endforeach

			<div class="w-full text-center">
				<h1 class="my-4 font-medium text-3xl">AMERICA DEL NORTE</h1>
			</div>

			@foreach($northAmerica as $country)
				@include('web.guias.partials.card_guia')
			@endforeach

			<div class="w-full text-center">
				<h1 class="my-4 font-medium text-3xl">AMERICA DEL SUR</h1>
			</div>

			@foreach($southAmerica as $country)
				@include('web.guias.partials.card_guia')
			@endforeach

			<div class="w-full text-center">
				<h1 class="my-4 font-medium text-3xl">OCEANIA</h1>
			</div>

			@foreach($oceania as $country)
				@include('web.guias.partials.card_guia')
			@endforeach

			<div class="w-full text-center">
				<h1 class="my-4 font-medium text-3xl">ÁFRICA</h1>
			</div>

			@foreach($africa as $country)
				@include('web.guias.partials.card_guia')
			@endforeach
			
		</div>
	</section>
</div>

@endsection