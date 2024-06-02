<x-app-layout title="Contact">

    <main class="mt-20 mb-40 w-full lg:w-[550px] md:w-[500px] mx-auto">
        <h1 class="text-3xl text-center font-bold text-neutral-700">Contact</h1>
        <p class="text-center">Als je meer vragen heb neem gerust contact met team <strong>duidelijkheid</strong>.</p>
        <br>
        <div class="bg-green-100  border-green-800 text-neutral-700 mx-auto w-80">
               @if (session('success'))
               <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
     <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
       <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
     </svg>
     <span class="sr-only">Info</span>
     <div class="ms-3 text-sm font-medium">
      Bedankt voor u bericht.<a href="/" class="font-semibold underline hover:no-underline">Naar welkom</a>
     </div>

    </div>
     @elseif (session('error'))
               <div id="alert-1" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
     <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
       <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
     </svg>
     <span class="sr-only">Info</span>
     <div class="ms-3 text-sm font-medium">
     Er is iets fout gegaan druk: <a href="{{route('contact')}}" class="font-semibold underline hover:no-underline">Opnieuw </a>
     </div>

    </div>
               @endif
           </div>
           <br>
           <br>

<x-email.contact-form />
<div>

    <p class="text-left mt-20"><strong class="text-xl">Geachte heer of mevrouw</strong> <br><br>We streven ernaar om binnen twee weken contact met u op te nemen. Ons team zet zich in om u zo snel mogelijk van dienst te zijn.</p><br>
    <h3>Met vriendelijke groet:</h3><br>
    <h2 class="text-left font-bold text-2xl">Duidelijkheid </h2>
</div>

       </main>
    </x-app-layout>
