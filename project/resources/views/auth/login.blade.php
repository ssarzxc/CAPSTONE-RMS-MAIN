<x-guest-layout>
    <div class="flex h-screen items-center justify-center bg-green-800 bg-opacity-90">
        <div class="flex w-[800px] shadow-lg rounded-lg overflow-hidden bg-white">

            <!-- Left Section -->
            <div class="w-1/2 flex items-center justify-center bg-green-600 bg-opacity-10">
                <div class="bg-white/80 p-10 rounded-full flex items-center justify-center w-24 h-24">
                    <i class="fas fa-house text-primary text-6xl"></i>
                </div>
            </div>

            <!-- Right Section (Login Form) -->
            <div class="w-1/2 p-10 flex flex-col justify-center">
                <p class="subheader text-4xl font-bold text-green-700 mb-6 text-center">Welcome!</p>

                <x-validation-errors class="mb-4" />

                @session('status')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ $value }}
                    </div>
                @endsession

                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <div>
                        <x-label for="email" value="{{ __('Email') }}" class="text-gray-700" />
                        <x-input id="email"
                            class="block mt-1 w-full rounded-full border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-300 focus:outline-none"
                            type="email" name="email" :value="old('email')" required autofocus
                            autocomplete="username" />
                    </div>

                    <div>
                        <x-label for="password" value="{{ __('Password') }}" class="text-gray-700" />
                        <x-input id="password"
                            class="block mt-1 w-full rounded-full border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-300 focus:outline-none"
                            type="password" name="password" required autocomplete="current-password" />

                    </div>

                    <div class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" class="text-green-600" />
                        <label for="remember_me" class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</label>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        @if (Route::has('password.request'))
                            <a class="text-sm text-bold text-primary hover:underline" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="bg-green-800 bg-opacity-85 hover:bg-green-800 hover:scale-110 transition-transform duration-300 text-white font-bold py-2 px-6 rounded-full">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
