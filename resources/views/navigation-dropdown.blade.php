<nav x-data="{ open: false }" class="fixed top-0 left-0 z-50 w-screen bg-white md:w-full">
    <!-- Primary Navigation Menu -->
    <div class="flex w-full mx-auto h-13 max-w-7xl">
        {{-- <div class="flex justify-between h-16"> --}}
        <div class="flex justify-between w-full">
            <!-- Logo -->
            <div class="items-center hidden sm:flex">
                <a href="{{ route('home') }}" class="text-2xl lg:text-4xl font-champ">
                    BARCELONA TO ...
                    {{-- <x-jet-application-mark class="w-auto h-9" /> --}}
                </a>
            </div>

            <!-- Navigation Links -->
            {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"> --}}
            <div class="flex justify-around w-full sm:w-1/2">

                <x-jet-nav-link href="{{ route('videos') }}" :active="request()->routeIs('videos')">
                    <span class="hidden sm:inline-block">
                        {{ __('videos') }}
                    </span>
                    <span class="sm:hidden">
                        <i class="text-3xl material-icons">subscriptions</i>
                    </span>
                </x-jet-nav-link>

                {{-- <x-jet-nav-link class="hidden sm:flex" href="{{ route('guias') }}" :sm="false"
                    :active="request()->routeIs('guias')">
                    {{ __('guias') }}
                </x-jet-nav-link> --}}

                {{-- <x-jet-nav-link href="{{ route('tienda') }}" :active="request()->routeIs('tienda')">
                    <span class="hidden sm:inline-block">
                        {{ __('tienda') }}
                    </span>
                    <span class="sm:hidden">
                        <i class="text-3xl material-icons">local_grocery_store</i>
                    </span>
                </x-jet-nav-link> --}}

                <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    <span class="hidden sm:inline-block">
                        {{ __('home') }}
                    </span>
                    <span class="sm:hidden">
                        <img src="{{url('/images/icons/bcnto-512sb.png')}}" alt="" class="w-12 h-12 -mt-1">
                    </span>
                </x-jet-nav-link>

                <x-jet-nav-link href="{{ route('mapa') }}" :active="request()->routeIs('mapa')">
                    <span class="hidden sm:inline-block">
                        {{ __('mapa') }}
                    </span>
                    <span class="sm:hidden">
                        <i class="text-3xl material-icons">public</i>
                    </span>
                </x-jet-nav-link>

                <x-jet-nav-link class="hidden sm:flex" href="{{ route('contacto') }}" :sm="false"
                    :active="request()->routeIs('contacto')">
                    {{ __('contacto') }}
                </x-jet-nav-link>
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-1 text-gray-400 transition duration-150 ease-in-out rounded-md 1/5 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-7 h-7" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>
        </div>

        <!-- Settings Dropdown -->
        {{-- <div class="hidden lg:flex lg:items-center">
            @if (Route::has('login'))
            <div class="absolute top-0 right-0 hidden px-6 py-4 lg:block">
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

    </div> --}}

    <!-- Hamburger -->

    {{-- </div> --}}
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden w-max-1/4">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('home') }}
            </x-jet-nav-link>
            <x-jet-responsive-nav-link href="{{ route('videos') }}" :active="request()->routeIs('videos')">
                {{ __('videos') }}
            </x-jet-nav-link>
            <x-jet-responsive-nav-link href="{{ route('contacto') }}"
                :active="request()->routeIs('contacto')">
                {{ __('contacto') }}
            </x-jet-nav-link>
            <x-jet-responsive-nav-link href="{{ route('tags') }}"
                :active="request()->routeIs('contacto')">
                {{ __('Admin Tags') }}
            </x-jet-nav-link>
            <x-jet-responsive-nav-link href="{{ route('categories.index') }}"
                :active="request()->routeIs('contacto')">
                {{ __('Admin Categories') }}
            </x-jet-nav-link>
            <x-jet-responsive-nav-link href="{{ route('posts.index') }}"
                :active="request()->routeIs('contacto')">
                {{ __('Admin Post') }}
            </x-jet-nav-link>
            <x-jet-responsive-nav-link href="{{ route('admin') }}"
                :active="request()->routeIs('admin')">
                {{ __('Admin') }}
            </x-jet-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        {{-- <div class="pt-4 pb-1 border-t border-gray-200"> --}}
            {{-- <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
            alt="{{ Auth::user()->name }}" />
        </div>

        <div class="ml-3">
            <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
            <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
        </div>
    </div> --}}

    {{-- <div class="mt-3 space-y-1">
        <!-- Account Management -->
        <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
    {{ __('Profile') }}
    </x-jet-responsive-nav-link>

    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
        {{ __('API Tokens') }}
    </x-jet-responsive-nav-link>
    @endif

    <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
            {{ __('Logout') }}
        </x-jet-responsive-nav-link>
    </form>

    <!-- Team Management -->
    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
    <div class="border-t border-gray-200"></div>

    <div class="block px-4 py-2 text-xs text-gray-400">
        {{ __('Manage Team') }}
    </div>

    <!-- Team Settings -->
    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
        :active="request()->routeIs('teams.show')">
        {{ __('Team Settings') }}
    </x-jet-responsive-nav-link>

    <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
        {{ __('Create New Team') }}
    </x-jet-responsive-nav-link>

    <div class="border-t border-gray-200"></div>

    <!-- Team Switcher -->
    <div class="block px-4 py-2 text-xs text-gray-400">
        {{ __('Switch Teams') }}
    </div>

    @foreach (Auth::user()->allTeams() as $team)
    <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
    @endforeach
    @endif
    </div> --}}
    {{-- </div> --}}
    </div>
</nav>