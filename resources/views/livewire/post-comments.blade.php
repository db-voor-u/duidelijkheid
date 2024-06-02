
<div class="mt-10 comments-box border-t border-gray-100 pt-10">

    @auth


    <h2 class="text-2xl font-semibold text-gray-900 mb-5">Reactie</h2>
    <p>Bij reactie denk aan respect voor elkaar en taal gebruik.<br>Let op niet te grote reactie schrijven.<br>Bij meer vragen neem gerust <x-button wire:navigate href="{{route('contact')}}">  Contact </x-button> met ons op.</p>

<br>
    <textarea
    wire:model="comment"
        class="w-full rounded-lg p-4 bg-gray-50 focus:outline-none text-sm text-gray-700 border-gray-200 placeholder:text-gray-400"
        cols="30" rows="7"></textarea>
    <button
    wire:click="addComment"
        class="mt-3 inline-flex items-center justify-center h-10 px-4 font-medium tracking-wide text-white transition duration-200 bg-gray-900 rounded-lg hover:bg-gray-800 focus:shadow-outline focus:outline-none">
        Plaats een reactie
    </button>
    @else
    <div class="flex flex-col">
         <x-button wire:navigate  class="mx-auto" href="{{ route('login')}}">Inloggen om reactie te plaatsen</x-button>
         <br>
         <x-button wire:navigate class="mx-auto" href="{{ route('register')}}">Of nog niet geregistreerd!</x-button>
</div>
 @endauth


    <div class="user-comments px-3 py-2 mt-5">
        @forelse ($this->comments as $comment )


        <div class="comment [&:not(:last-child)]:border-b border-gray-100 py-5">
            <div class="user-meta flex mb-4 text-sm items-center">
              <x-posts.author :author="$comment->user" />
                {{-- <span class="text-gray-500">{{$comment->created_at->diffForHumans()}}</span> --}}
            </div>
            <div class="text-justify text-gray-700 ">
                {{$comment->comment}}
            </div>
        </div>
        @empty
              <div class="text-gray-500 text-center">
            <span> Geen reacties geplaatst</span>
        </div>
        @endforelse

    </div >
    <div class=" text-white">
      {{$this->comments->links()}}
    </div>
</div>
