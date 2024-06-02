<x-app-layout title="Wachtwoord vergeten">
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Je wachtwoord vergeten? Geen probleem. Laat ons uw e-mailadres weten en wij sturen u per e-mail een link voor het opnieuw instellen van uw wachtwoord waarmee u een nieuw wachtwoord kunt kiezen.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Link voor het opnieuw instellen van uw e-mailwachtwoord') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-app-layout>
