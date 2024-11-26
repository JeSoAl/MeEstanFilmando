<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-warning text-xl leading-tight">
            {{ __('Cambio de contraseña') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('password.store', ['user' => $user]) }}">
        @csrf

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Cambiar Contraseña') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
