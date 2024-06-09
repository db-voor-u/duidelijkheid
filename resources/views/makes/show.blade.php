<x-app-layout :title="$postMake->title">

    <article class="col-span-4 md:col-span-3 mt-10 mx-auto py-5 w-full" style="max-width:700px">
        <img class="w-full my-2 rounded-lg" src="{{ $postMake->getImageUrl()}}" alt="thumbnail">
        <h1 class="text-4xl font-bold text-left text-gray-800">
           {{ $postMake->title}}
        </h1>

        <div class="article-content prose py-3 text-gray-800 text-lg text-justify">
           {!! $postMake->body !!}
        </div>
        <div>

    <div class=" flex justify-center">
        <x-button wire:navigate href="{{ route('makes.build') }}" class=" justify-center items-center" >Terug naar overzicht</x-button>
    </div>
    </article>





</x-app-layout>
