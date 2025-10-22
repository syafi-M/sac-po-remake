<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="p-3 mb-4 text-sm text-blue-700 rounded-md bg-blue-50" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="text-gray-400 fas fa-envelope"></i>
                </div>
                <x-text-input id="email" class="block w-full py-3 pl-10 pr-3 border border-gray-300 rounded-lg form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="text-gray-400 fas fa-lock"></i>
                </div>
                <x-text-input id="password" class="block w-full py-3 pl-10 pr-3 border border-gray-300 rounded-lg form-input"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input id="remember_me" type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" name="remember">
                <label for="remember_me" class="block ml-2 text-sm text-gray-700">
                    Remember me
                </label>
            </div>

            @if (Route::has('password.request'))
                <div class="text-sm">
                    <a class="font-medium text-blue-600 hover:text-blue-500" href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                </div>
            @endif
        </div>

        <div class="pt-2">
            <x-primary-button class="flex justify-center w-full px-4 py-3 font-medium text-white bg-blue-600 rounded-lg login-button hover:bg-blue-700">
                <i class="mr-2 fas fa-sign-in-alt"></i>
                Sign In
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
