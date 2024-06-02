<footer class="text-sm space-x-4 flex items-center border-t border-gray-100 flex-wrap justify-center py-4 ">

    <x-nav-link href="{{ route('makes.build') }}" :active="request()->routeIs('makes.build')">

        {{ __('Powerby') }}
    </x-nav-link>

</footer>
