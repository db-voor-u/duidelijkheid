<div  class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div>
            @if ($search)
                {{-- <h3 class="text-lg  text-gray-900 mb-3">Resultaten voor: <strong>{{$search}}</strong></h3> --}}

            @endif
            @if ($this->activeCategory)
            <x-badge wire:navigate href=" {{ route('posts.index',['category'=> $this->activeCategory->slug]) }}" :bgColor="$this->activeCategory->bg_color">
                {{ $this->activeCategory->title }}
            </x-badge>


            @endif
        </div>
        {{-- <div  class="flex items-center space-x-4 font-light ">
            <button class="{{ $sort === 'desc' ? 'text-neutral-900 border-b border-secondary-color' : 'text-neutral-500'}}  py-4"
            wire:click="setSort('desc')">Nieuwste</button>
            <button class="{{ $sort === 'asc' ? 'text-neutral-900 border-b border-secondary-color' : 'text-neutral-500'}}  py-4"
            wire:click="setSort('asc')">Oudste</button>
        </div> --}}
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post )
          <x-posts.post-item  wire:key="{{$post->id}}" :post="$post" />
        @endforeach

    </div>
    <div class="py-4">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>
