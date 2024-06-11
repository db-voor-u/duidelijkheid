<div class=" js-cookie-consent cookie-consent flex  w-full mb-44  pointer-events-none  h-auto">
    <div class="w-full flex flex-col items-center space-x-4 ">

        <div class="max-w-sm w-full bg-white border border-transparent shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">

            <div class="p-4 transform transition-all">

                <div class="w-full h-auto ">

                    <p class="ml-3 text-black cookie-consent__message">
                        {!! trans('cookie-consent::texts.messages') !!}
                    </p>
                </div>

                <div class="mt-2 flex w-full  justify-between">

                    <a class="js-cookie-consent-disagree cookie-consent__disagree cursor-pointer text-red-500 underline mt-6">
                        {{ trans('cookie-consent::texts.disagree') }}
                    </a>
                     <x-button class="js-cookie-consent-agree cookie-consent__agree cursor-pointer mt-4 ">
                        {{ trans('cookie-consent::texts.agree') }}
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</div>
