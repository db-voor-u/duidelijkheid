<x-app-layout :title="$post->title">

            <article class="col-span-4 md:col-span-3 mt-10 mx-auto py-5 w-full" style="max-width:700px">
                <img class="w-full my-2 rounded-lg" src="{{ $post->getThumbnailUrl()}}" alt="thumbnail">
                <h1 class="text-4xl font-bold text-left text-gray-800">
                   {{ $post->title}}
                </h1>
                <div class="mt-2 flex justify-between items-center">
                    <div class="flex py-5 text-base items-center">
                        <x-posts.author :author="$post->author" />
                        <span class="text-gray-500 text-sm">| {{$post->getReadingTime()}} lezen</span>
                    </div>
                    <div class="flex items-center">
                        <x-delen-knop/>
                    </div>
                </div>

                <div
                    class="article-actions-bar my-6 flex text-sm items-center justify-between border-t border-b border-gray-100 py-4 px-2">
                    <div class="flex items-center">
                        <livewire:like-button :key="'likebutton-'.$post->id" :post="$post"/>
                    </div>
                    <div>
                        <div class="flex items-center">


                        </div>
                    </div>
                </div>

                <div class="article-content prose py-3 text-gray-800 text-lg text-justify">
                   {!! $post->body !!}
                </div>
                <br>
                @if ($post->pdf_file != null)
                    <form action="{{ asset('storage/' . $post->pdf_file) }}" method="GET" target="_blank" >
                        @csrf
                        <x-button type="submit" class="justify-center items-center">Download pdf bestand</x-button>
                    </form>

                @else
                {{-- <p>Geen bestand beschikbaar</p> --}}

                @endif

            </div>



<livewire:post-comments :key="'comments'.$post->id" :post="$post" />
    <div class=" flex justify-center">
        <x-button wire:navigate href="{{ route('makes.build') }}" class=" justify-center items-center" >Terug naar overzicht</x-button>
    </div>
            </article>


</x-app-layout>
