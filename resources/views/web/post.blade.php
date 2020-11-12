@extends('layouts.app')

@section('content')

		<div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative h-64">
			<img src="{{ $post->file }}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
			<a href="#" class="px-4 py-1 bg-black rounded-lg text-gray-200 absolute bottom-0 right-0 mb-2">{{ $post->country->name }}</a>
			<div class="p-4 absolute bottom-0 left-0 z-20">
				<h2 class="text-4xl font-semibold text-gray-100 leading-tight">
					{{ $post->name }}
				</h2>
				<div class="flex mt-3">
					<img src="https://randomuser.me/api/portraits/men/97.jpg"
						class="h-10 w-10 rounded-full mr-2 object-cover" />
					<div>
						<p class="font-semibold text-gray-100 text-sm"> Miquel Guix </p>
						<p class="font-semibold text-gray-200 text-sm">{{ $post->created_at->format('d/m/Y') }}</p>
					</div>
				</div>
			</div>
		</div>

		<div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
			<p class="pb-6"> {{ $post->body }} </p>
			<p class="pb-6"> {{ $post->body }} </p>
			
			<div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
				Sportsman do offending supported extremity breakfast by listening. Decisively advantages nor
				expression
				unpleasing she led met. Estate was tended ten boy nearer seemed. As so seeing latter he should thirty whence.
				Steepest speaking up attended it as. Made neat an on be gave show snug tore.
			</div>
			
			<p class="pb-6"> {{ $post->body }} </p>
			
			<h2 class="text-2xl text-gray-800 font-semibold mb-4 mt-4">Uneasy barton seeing remark happen his has</h2>
			
			<p class="pb-6"> {{ $post->body }} </p>
			<p class="pb-6"> {{ $post->body }} </p>
			<p class="pb-6"> {{ $post->body }} </p>
			<p class="pb-6"> {{ $post->body }} </p>
			
			<div class="p-2 flex ">
				@foreach( $post->tags as $tag)
				<a href="{{route('posts_tag', $tag->slug)}}" class="rounded-full m-2 text-sm font-semibold text-blue-400">#{{ $tag->name }}</a>
				@endforeach
			</div>

		</div>


@endsection