<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Barcelona To ...</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        

        
    </head>
    <body>
					<h1>BARCELONA TO ...</h1>
					<h2>BARCELONA TO ...</h2>
					<h3>BARCELONA TO ...</h3>
					<h4>BARCELONA TO ...</h4>
					<h5>BARCELONA TO ...</h5>
					<h6>BARCELONA TO ...</h6>

					@if (Route::has('login'))
					<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
						@auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
				</div>  
    </body>
</html>
