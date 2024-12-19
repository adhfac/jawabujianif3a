<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded-lg p-8 w-full sm:max-w-md">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-primary font-semibold" />
            <x-text-input id="email" class="block mt-1 w-full p-3 border border-gray-300 rounded-md text-primary focus:outline-none focus:ring-2 focus:ring-accent" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-primary font-semibold" />

            <x-text-input id="password" class="block mt-1 w-full p-3 border border-gray-300 rounded-md text-primary focus:outline-none focus:ring-2 focus:ring-accent"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center text-primary">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-accent shadow-sm focus:ring-accent" name="remember">
                <span class="ms-2 text-sm">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-accent hover:text-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="bg-accent text-white hover:bg-light-accent focus:ring-2 focus:ring-offset-2 focus:ring-accent">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
