@props(['postMake'])
<article {{$attributes}}>
    <div class="mb-10 max-w-6xl mx-auto  shadow-lg rounded-lg py-4 px-4">
        <div class="grid grid-cols-3 ">
            <img class="w-full mx-auto rounded-xl" src="{{ $postMake->getThumbnailUrl() }}" alt="thumbnail">
        </div>
        <div class="col-span-12 md:col-span-8">
            <h2 class="text-2xl font-semibold text-neutral-900 transition-colors">
                {{ $postMake->title }}
            </h2>

            <p class="mt-2 text-neutral-700">
            {{ $postMake->getExcerpt() }}
            </p>

            <div class="flex  justify-end mt-4">
                <x-button wire:navigate href="{{ route('makes.show', $postMake->slug) }}" >
                    Meer lezen
                </x-button>
            </div>
        </div>
    </div>
</article>


