@props(['contact'])
<form action="/send-mail" method="POST" class=" mx-auto  max-w-2xl">
    @csrf
     <div class=" w-full mb-5  ">
        <div class=" w-full mb-6 ">
            <x-input type="text" name="name" class="w-full" placeholder="Naam en Achternaam: " required />

        </div>

        <div class="r w-full mb-6">
            <x-input type="email" name="email"  class="w-full" placeholder="Email addres: " required />

        </div>

        <div class="relative z-0 w-full mb-6 group">
            <textarea name="message" id="message" rows="4" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" placeholder="Uw bericht: " required></textarea>

        </div>


         <div class="flex justify-end">
        <x-button type="submit" >Versturen</x-button>
</div>
     </div>


    </form>
