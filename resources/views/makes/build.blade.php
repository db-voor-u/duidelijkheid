<x-app-layout title="Powerby">
    <div class="w-full lg:max-w-5xl grid grid-cols-4 gap-10  sm:grid-cols-1 mx-auto mt-20">
        <div
        class="border-t border-t-gray-100 md:border-t-none col-span-4 md:col-span-1 px-3 md:px-6  space-y-10 py-6 pt-10 md:border-l border-gray-100 ">

    </div>
        <div class="md:col-span-3 col-span-4">
            @foreach ($postMakes as $postMake)
                <x-makes.make-card :postMake="$postMake" class="md:col-span-1 col-span-3" />
            @endforeach

        </div>

    </div>
</x-app-layout>
