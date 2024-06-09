<x-app-layout title="Welkom">
@section('hero')
    <div class="w-full text-center py-32 ">
        <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
            Welkom bij<br> <span class=" text-primary-color">Duidelijkheid</span> <span class="text-neutral-700"> Blog</span>
        </h1>


    </div>
@endsection

        <div class="mb-10 max-w-6xl mx-auto">
            <div class="mb-16">
                <h2 class="mt-16 mb-5 text-3xl text-neutral-700 font-bold ">Blog</h2>
                <div class="">
                    <div class="grid grid-cols-3  gap-4 ">
                        @foreach ($featuredPosts as $post )

                            <x-posts.post-card  :post="$post" class="md:col-span-1 col-span-3 shadow-lg rounded-lg px-2 py-2" />


                        @endforeach


                    </div>
                </div>
                <a wire:navigate class="mt-10 block text-center text-lg text-neutral-700 font-semibold"
                    href="{{ route('posts.index')}}">Meer
                    blog</a>
            </div>
            <hr>
            <br>
            <br>
            <br>

            {{-- <h2 class="mt-16 mb-5 text-3xl  text-neutral-700 font-bold">Laatste blog</h2>
            <div class="w-full mb-5">
                <div class="grid grid-cols-3 gap-10 ">
                    @foreach ($latestPosts as $post )

                        <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3 shadow-lg rounded-lg px-2 py-2" />


                    @endforeach
                </div>

            </div>
            <a wire:navigate class="mt-10 block text-center text-lg text-neutral-700 font-semibold"
                href="{{ route('posts.index')}}">Meer
                Berichten</a> --}}
        </div>


</x-app-layout>
