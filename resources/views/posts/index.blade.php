<x-app-layout title="Blog">
    <div class="w-full lg:max-w-5xl grid grid-cols-4 gap-10  sm:grid-cols-1 mx-auto mt-20">

     {{-- @include('posts.partials.search-box') --}}


     {{-- @include('posts.partials.categories-box') --}}

        <div class="md:col-span-3 col-span-4">
           <livewire:post-list />
        </div>

    </div>
</x-app-layout>
