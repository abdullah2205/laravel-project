<x-guest-layout>
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input id="email" type="email" name="email" 
                    class="input input-info bg-gray-100 input-sm border-0 w-full mt-2"
                    value="{{ old('email') }}" required autofocus>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label class="label">
                    <span class="label-text">Password</span>
                </label> 
                <input id="password" type="password" name="password" 
                class="input input-info bg-gray-100 input-sm border-0 w-full mt-2"
                value="{{ old('email') }}" required autocomplete="current-password">
            </div>
           
            <div class="grid">
                @if (Route::has('password.request'))
                <a class="justify-self-end mt-2 underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            </div>

            <!-- Remember Me -->
            <div class="block">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Not registered?') }}
                </a>

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
