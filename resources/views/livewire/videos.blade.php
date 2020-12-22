<div>
    @foreach($list_items as $items)

{{-- <h1 class="pt-5 text-4xl text-center uppercase font-champ lg:text-5xl">BARCELONA TO {{ $items->first()->country->name}}</h1> --}}
<div class="grid grid-cols-4">
	@foreach($items as $item)
@if(($loop->first) )
	
	<section class="flex flex-col col-span-4 p-3 rounded-l md:flex-row">
		<div class="relative z-10 w-full md:w-2/5 xl:w-5/12">
			<img src="{{url('/images/miniatures/' . $item->link . '.jpg')}}" alt="" class="z-10 object-scale-down lg:rounded-l">
			<a href="{{ route('video', $item->slug) }}" class="absolute inset-0 flex items-center transition duration-500 ease-in-out opacity-75 hover:opacity-100">
				@include('icons.youtube')
			</a>
		</div>
		<div class="flex flex-col items-center justify-center w-full text-center bg-white rounded-r md:w-1/2 xl:w-7/12">
			<h1 class="my-2 text-xl font-bold text-gray-800 font-champ font-marcell">{{ $item->name}}</h1>
			<p class="w-4/5 mb-2 leading-normal text-gray-700">{{ $item->excerpt }}</p>
		</div>
	</section>
	<!--1/3 col -->
	@else
	<section class="col-span-1 p-3">
		<div class="flex-1 bg-white rounded-t rounded-b-none">
			<div class="relative w-full">
			@isset($item->link)
				<img src="{{url('/images/miniatures/' . $item->link . '.jpg')}}" alt="" class="z-0 w-full rounded-t">
				
				<a href="{{ route('video', $item->slug) }}" class="absolute inset-0 flex items-center transition duration-500 ease-in-out opacity-75 hover:opacity-100">
					@include('icons.youtube')
				</a>
				@else
				<img src="{{ $item->file }}" class="z-0 object-scale-down w-full h-full" />
				@endisset
			</div>
			<div
				class="flex flex-wrap items-center justify-center p-2 text-center no-underline bg-white rounded-r hover:no-underline">
				<h1 class="p-2 my-2 font-sans text-xl font-bold text-gray-800">{{ $item->name}}</h1>
				<p class="w-4/5 mb-2 leading-normal text-gray-700">{{ $item->excerpt }}</p>
				<a href="{{ route('post', $item->slug) }}"
				class="px-4 py-2 font-semibold tracking-wider text-white bg-blue-400 border rounded-lg shadow-lg focus:outline-none focus:shadow-outline hover:bg-blue-300 active:bg-blue-800">Ver más sobre
				{{$item->country->name}}</a>
			</div>
		</div>
	</section>
	@endif
	@endforeach
</div>
@endforeach

</div>
