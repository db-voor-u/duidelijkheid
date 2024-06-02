<div x-data="{
  query: '{{ request('search', '') }}'
}" x-on:keyup.enter.window="$dispatch('search',{
    search :query
})" id="search-box">
    <div>
        <h3 class="text-lg font-semibold text-gray-900 mb-3">Zoeken naar blog's</h3>
        <div class="w-52 flex rounded-2xl bg-gray-100 py-2 px-3 mb-3 items-center">
            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </span>
            <input
                x-model="query"
                class="w-40 ml-1 bg-transparent focus:outline-none focus:border-none focus:ring-0 outline-none border-none  text-gray-800 placeholder:text-gray-400"
                type="text" placeholder="zoeken...">
        </div>
        <x-button x-on:click="$dispatch('search',{
            search: query

        })" class=" mt-2 bg-gray-100 text-gray-800">Zoeken</x-button>




    </div>
    <br><br>
     <a wire:navigate href="{{ route('posts.index') }}" class="flex flex-row">Druk hier om pagina te verversen<br>Als geen blog kan vinden <svg xmlns="http://www.w3.org/2000/svg" class="mt-2 ml-2" width="2em" height="2em" viewBox="0 0 20 20"><g fill="red"><path d="M5.05 14.95a1 1 0 1 1 1.414-1.414A5 5 0 0 0 15 10a1 1 0 1 1 2 0a7 7 0 0 1-11.95 4.95"/><path d="M13.559 12.832a1 1 0 1 1-1.11-1.664l3-2a1 1 0 1 1 1.11 1.664z"/><path d="M18.832 12.445a1 1 0 0 1-1.664 1.11l-2-3a1 1 0 1 1 1.664-1.11zm-3.975-7.594a1 1 0 1 1-1.414 1.414a5 5 0 0 0-8.536 3.536a1 1 0 1 1-2 0a7 7 0 0 1 11.95-4.95"/><path d="M6.349 6.969a1 1 0 0 1 1.11 1.664l-3.001 2a1 1 0 1 1-1.11-1.664z"/><path d="M1.075 7.356a1 1 0 1 1 1.664-1.11l2 3a1 1 0 1 1-1.664 1.11z"/></g></svg></a>
</div>
