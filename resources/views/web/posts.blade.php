@extends('layouts.app')


@section('content')
<!-- component -->
<div class="max-w-screen-lg mx-auto">

	
		<!-- featured section -->
		<section class="font-sans mb-5 flex rounded overflow-hidden lg:shadow-lg flex-col lg:flex-row">
			<div class="w-full lg:w-1/2">
				<img class="p-2 rounded" src="{{ $postOne->file }}" alt="{{ $postOne->slug }}">
				<a href="{{route('posts_country', $postOne->country->countrySlug)}}" class="text-sm font-semibold text-blue-500 p-4">#{{$postOne->country->name }}</a>

			</div>
			<div class="w-full lg:w-1/2 flex flex-col items-center justify-center text-center">
				<h1 class="my-4  text-gray-800 font-bold text-xl">{{ $postOne->name}}</h1>
				<p class="leading-normal mb-4 w-2/3 text-gray-700">{{ $postOne->excerpt }}</p>
				<a href="{{ route('post', $postOne->slug) }}"
            class="px-4 py-2 bg-blue-400 shadow-lg border rounded-lg text-white font-semibold tracking-wider focus:outline-none focus:shadow-outline hover:bg-blue-300 active:bg-blue-800">Leer más</a>
			</div>
		</section>


			<!-- sub-main posts -->


			<div class="space-x-0 lg:flex lg:space-x-6 items-center justify-between">

				@foreach($postsFour as $postFour)
				
				<div class="p-2 text-center lg:w-1/3 rounded overflow-hidden lg:shadow-lg mt-4">
					<img class="w-full" src=" {{ $postFour->file }} " alt="Sunset in the mountains">
					<div class="font-bold text-xl px-2"> {{ $postFour->name }} </div>
					<div class="px-6 py-4">
						<p class="text-grey-darker mb-6 text-base">
							{{ $postFour->excerpt }}
						</p>
						<a href="{{ route('post', $postFour->slug) }}" class="px-4 py-2 bg-blue-400 shadow-lg border rounded-lg text-white font-semibold tracking-wider focus:outline-none focus:shadow-outline hover:bg-blue-300 active:bg-blue-800">Leer más</a>
						<a href="{{route('posts_country', $postFour->country->countrySlug)}}" class="bg-grey-lighter rounded-full text-sm font-semibold text-grey-darker">#{{$postFour->country->name }}</span>
					</div>
				</div>
				@endforeach
			</div>
		

		<!-- end featured section -->


		<!-- recent posts -->
	<div class="flex mt-16 mb-4 p-4 lg:px-0 items-center justify-evenly">
		<h2 class="font-bold text-3xl">Últimos artículos</h2>
		<a class="bg-gray-200 hover:bg-green-200 text-gray-800 px-3 py-1 rounded cursor-pointer">Ver más</a>
	</div>
	<div class="block space-x-0 lg:flex lg:space-x-6">

		@foreach($postsLatest as $postLatest)
			<div class="rounded w-full lg:w-1/3 p-4 lg:p-0">
				<img src="{{ $postLatest->file }}" class="rounded" alt="technology" />
				<div class="p-4 pl-0">
					<h2 class="font-bold text-2xl text-gray-800">{{ $postLatest->name }}</h2>
					<p class="text-gray-700 mt-2">{{ $postLatest->excerpt }}</p>
					<a href="{{ route('post', $postLatest->slug) }}" class="inline-block bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-2 border border-blue-500 hover:border-transparent rounded-lg mt-2 ml-auto"> Leer más </a>
				</div>
			</div>
		@endforeach

		</div>
		<!-- end recent posts -->

		<!-- subscribe -->
		@include('layouts.subscribe')
		<!-- ens subscribe section -->



		<!-- popular posts -->
		<div class="flex mt-16 mb-4 px-4 lg:px-0 items-center justify-between">
			<h2 class="font-bold text-3xl">Los más leidos</h2>
			<a class="bg-gray-200 hover:bg-green-200 text-gray-800 px-3 py-1 rounded cursor-pointer">
				Ver todos
			</a>
		</div>
		<div class="block space-x-0 lg:flex lg:space-x-6">

			@foreach($postsPopular as $postPopular)
			<div class="rounded w-full lg:w-1/2  p-4 lg:p-0">
				<img src="{{ $postPopular->file }}" class="rounded" alt="technology" />
				<div class="p-4 pl-0">
					<h2 class="font-bold text-2xl text-gray-800">{{ $postPopular->name }}</h2>
					<p class="text-gray-700 mt-2">
						{{ $postPopular->excerpt }}
					</p>

					<a href="{{ route('post', $postPopular->slug) }}" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto"> Leer más </a>
				</div>
			</div>
			@endforeach

		</div>
		<!-- end popular posts -->
		
</div>	
@endsection