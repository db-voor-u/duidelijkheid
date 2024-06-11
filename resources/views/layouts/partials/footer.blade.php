<footer class="text-sm space-x-4 flex flex-col items-center border-t border-gray-100 flex-wrap justify-center py-4 ">

 <p class="ml-4">2024🛠️</p>
 <x-nav-link href="{{ route('makes.build') }}" :active="request()->routeIs('makes.build')">
    {{ __('PowerBy') }}
</x-nav-link>

</footer>
