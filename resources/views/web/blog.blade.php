@extends('layouts.app')

@section('content')
<!-- component -->
<div class="max-w-screen-lg mx-auto">

	
	<main class="mt-20">
		<!-- featured section -->
		<section class="font-sans mb-5 flex rounded overflow-hidden lg:shadow-lg flex-col lg:flex-row">
			<div class="w-full lg:w-1/2">
				<img class="p-2 rounded" src="{{ $postOne->file }}" alt="{{ $postOne->slug }}">
				<a href="{{route('posts_country', $postOne->country->slug)}}" class="text-sm font-semibold text-blue-500 p-4">#{{$postOne->country->name }}</span>

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
					<div class="p-2 flex justify-evenly">
						<a href="{{route('posts_country', $postFour->country->slug)}}" class="bg-grey-lighter rounded-full text-sm font-semibold text-grey-darker">#{{$postFour->country->name }}</span>
						@foreach( $postFour->tags as $tag)
						<a href="{{route('posts_tag', $tag->slug)}}" class="bg-grey-lighter rounded-full text-sm font-semibold text-grey-darker">#{{ $tag->name }}</a>
						@endforeach
					</div>
					<div class="font-bold text-xl px-2"> {{ $postFour->name }} </div>
					<div class="px-6 py-4">
						<p class="text-grey-darker mb-6 text-base">
							{{ $postFour->excerpt }}
						</p>
						<a href="{{ route('post', $postFour->slug) }}" class="px-4 py-2 bg-blue-400 shadow-lg border rounded-lg text-white font-semibold tracking-wider focus:outline-none focus:shadow-outline hover:bg-blue-300 active:bg-blue-800">Leer más</a>
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
		<div class="rounded flex md:shadow mt-12">
			<img src="https://images.unsplash.com/photo-1579275542618-a1dfed5f54ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="w-0 md:w-1/4 object-cover rounded-l" />
			<div class="px-4 py-2">
				<h3 class="text-3xl text-gray-800 font-bold">Subscribe to newsletter</h3>
				<p class="text-xl text-gray-700">We sent latest news and posts once in every week, fresh from the oven</p>
				<form class="mt-4 mb-10">
					<input type="email" class="rounded bg-gray-100 px-4 py-2 border focus:border-green-400" placeholder="john@tech.com"/>
					<button class="px-4 py-2 rounded bg-green-800 text-gray-100">
						Subscribe
						<i class='bx bx-right-arrow-alt' ></i>
					</button>
					<p class="text-green-900 opacity-50 text-sm mt-1">No spam. We promise</p>
				</form>
			</div>
		</div>
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

	</main>
</div>
@endsection