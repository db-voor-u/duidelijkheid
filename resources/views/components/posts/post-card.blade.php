@props(['post'])

<div {{$attributes}} class=" flex flex-col justify-between">
    <a wire:navigate href="{{ route('posts.show', $post->slug)}}">
        <div>
            <img class="w-60 m-auto rounded-xl" src="{{ $post->getThumbnailUrl() }}" alt="thumbnail">
        </div>
    </a>

    <div class="mt-3 flex flex-col justify-between flex-grow">
        <div>
            <h2 class="font-bold text-xl">{{$post->title}}</h2>
            <br>
            <p class="mt-2 text-neutral-700">
                {{$post->getExcerpt()}}
            </p>
        </div>
<br>

    </div>
    <div class="flex justify-end mt-8">
            {{-- @if ($category = $post->categories->first())
                <x-posts.category-badge :category="$category" />
            @endif --}}

            <x-button wire:navigate href="{{ route('posts.show', $post->slug) }}">Meer lezen</x-button>
        </div>
</div>

