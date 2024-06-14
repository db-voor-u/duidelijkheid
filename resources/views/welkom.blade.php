<x-app-layout title="Welkom">
@section('hero')
    <div class="max-w-5xl text-left mx-auto mt-20 text-neutral-900 ">
        <h1 class="text-2xl  text-center font-bold">
            Welkom bij duidelijkheid.com


        </h1>
        <br>
        <h2 class="font-bold">Beste bezoekers,</h2>
        <p>Welkom op Duidelijkheid.com. Hier vindt u gratis materialen die informatie duidelijker maken voor iedereen met autisme, hun verzorgers, leerkrachten, en chauffeurs die ondersteuning bieden aan mensen met autisme. Wij bieden handige en duidelijke hulpmiddelen. Duidelijkheid.com is een organisatie zonder winstoogmerk.</p> <br>
        <h2 class="font-bold">Rust voor het Brein</h2>
        <p>Geef het brein rust door jezelf te voorzien van hulpmiddelen die duidelijkheid en structuur bieden. Door gebruik te maken van visuele ondersteuning en gestructureerde hulpmiddelen, kunnen mensen met autisme beter functioneren in een maatschappij die niet altijd makkelijk te begrijpen is. Dit helpt om stress te verminderen en biedt een gevoel van veiligheid en rust.</p>
        <br>
        <h2 class="font-bold">De Eenzame Strijd</h2>
        <p>Wij weten dat het opvoeden van een kind met autisme een eenzame en vermoeiende zoektocht kan zijn. Vaak biedt de hulpverlening niet de ondersteuning die nodig is. Wij willen juist deze ouders aanspreken en hen de steun en tools bieden die zij zoeken om de uitdagingen aan te gaan maar ook zelf staande te blijven in een wereld vol oordelen.</p><br>
        <h2 class="font-bold">Ondersteuning voor Professionals</h2>
        <p>Daarnaast richten wij ons op leerkrachten, chauffeurs en andere professionals die dagelijks werken met mensen met autisme. Wij bieden hulpmiddelen en ondersteuning om hun werk makkelijker en effectiever te maken, zodat zij beter kunnen inspelen op de behoeften van mensen met autisme.</p><br>
        <h2 class="font-bold">Onze Passie en Doel</h2>
        <p>Wij streven ernaar dat ouders, verzorgers en mensen met autisme zelf de controle behouden. Autisme kent prachtige kanten, zoals creativiteit en passie. Helaas zien veel mensen vooral de beperkingen. Wij willen deze misvatting wegnemen en de sterke punten zichtbaar maken. Wij geloven dat de manier van communiceren en het opslaan van informatie anders verloopt bij mensen met autisme. Door aansluiting te vinden in hun belevingswereld, ontstaat er een connectie die veiligheid en rust biedt aan beide kanten.</p>
        <br><p>Met visuele hulpmiddelen als ondersteuning in de communicatie is deze connectie te realiseren. Het doel van het gebruik van visueel ondersteund materiaal is:</p><br>


            <h2 class="font-bold">Het afbeelden van activiteiten om een beeld te vormen van wat er komen gaat.</h2>
            <h2 class="font-bold">Het in beelden uiteenzetten van verschillende stappen om duidelijkheid te geven aan een activiteit, bijvoorbeeld bij het schoonmaken van een kamer:</h2>

            <div class="font-bold">
            <p>1.Losse spullen opruimen.</p>
            <p>2.Een doekje over je bureau halen</p>
            <p>3.Stofzuigen.</p>
</div>
         <br>
            <h2>Het bevestigen van gemaakte afspraken en deze tastbaar maken.</h2>

        <br>
        <h2 class="font-bold">Wat wij bieden</h2>
        <p>Wij bieden praktische tips, tools en visuele hulpmiddelen om het dagelijks leven makkelijker en duidelijker te maken. Wij willen de eenzame ouder, de toegewijde verzorger, de leerkracht en andere professionals de steun bieden die zij nodig hebben. Ons doel is dat iedereen met autisme zijn of haar talenten kan laten zien, en de beste versie van zichzelf mag worden, precies zoals hij/zij bedoeld is.</p>
        <br>
        <h2>Met vriendelijke groet,</h2>
        <br>
        <h2>Het Team van <strong>Duidelijkheid.com</strong></h2>

    </div>
    <div class="max-w-3xl mx-auto  ">
    <img class=" object-fit h-auto rounded-lg mt-10" src="{{ asset('images/heroimage.jpeg') }}" alt="hero" ></div>
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
