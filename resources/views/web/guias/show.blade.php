@extends('layouts.app')

@section('content')
<!-- component -->
<div class="max-w-screen-xl mx-auto">

	<section class="my-8 font-sans container m-auto">
		<div class="text-center">
			<h1 class="my-4 font-medium text-4xl">Guia {{ $country->name }} </h1>
		</div>
		
		<div class="text-center">
			<h1 class="my-4 font-medium text-4xl">Informaciones importantes </h1>
			{!!$country->importante!!}
		</div>
		
		<div class="text-center">
			<h1 class="my-4 font-medium text-4xl">Passaporte/Visado</h1>
			{!!$country->visados!!}
		</div>

		<div class="text-center">
			<h1 class="my-4 font-medium text-4xl">Seguridad</h1>
			{!!$country->seguridad!!}
		</div>

		<div class="text-center">
			<h1 class="my-4 font-medium text-4xl">Sanidad</h1>
			{!!$country->sanidad!!}
		</div>

		<div class="text-center">
			<h1 class="my-4 font-medium text-4xl">Divisa</h1>
			{!!$country->divisas!!}
		</div>

		<div class="text-center">
			<h1 class="my-4 font-medium text-4xl">Otros</h1>
			{!!$country->otros!!}
		</div>
					
		<div class="text-center">
			<h1 class="my-4 font-medium text-4xl">Lugares de interés</h1>
			{!!$country->direcciones!!}
		</div>

	</section>

@endsection