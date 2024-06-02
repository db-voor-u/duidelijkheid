<x-action-section>
    <x-slot name="title">
        {{ __('Verwijder Account') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Verwijder je account permanent.') }}
    </x-slot>


    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Zodra je account is verwijderd, worden al zijn bronnen en gegevens permanent verwijderd. Voordat je je account verwijdert, download alsjeblieft alle gegevens of informatie die je wilt behouden.') }}
        </div>


        <div class="mt-5">
            <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Verwijder Account') }}
            </x-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-dialog-modal wire:model.live="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Verwijder Account') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Weet je zeker dat je je account wilt verwijderen? Zodra je account is verwijderd, worden al zijn bronnen en gegevens permanent verwijderd. Voer je wachtwoord in om te bevestigen dat je je account permanent wilt verwijderen.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-input type="password" class="mt-1 block w-3/4"
                                autocomplete="current-password"
                                placeholder="{{ __('Wachtwoord') }}"
                                x-ref="password"
                                wire:model="password"
                                wire:keydown.enter="deleteUser" />

                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Annuleren') }}
                </x-secondary-button>

                <x-danger-button class="ms-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Verwijder Account') }}
                </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>
