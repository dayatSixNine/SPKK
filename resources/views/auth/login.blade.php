<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mt-10">
            <div class="flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">
                    Sign In
                </h1>
                <!-- Email Address -->
                <div class="w-full flex-1 mt-8 mx-auto max-w-xs">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Password -->
                <div class="w-full flex-1 mt-4 mx-auto max-w-xs">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="mypassword" type="password" name="password" class="block mt-1 w-full" required
                        autocomplete="current-password" />

                    <label for="" class="mt-4 inline-flex items-center text-black">
                        <x-input-checkbox type="checkbox" onclick="myFunction()" />
                        <span class="ms-2 text-sm text-gray-600 ">{{ __('Show Password') }}</span>
                    </label>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>

            <div class="flex flex-col space-y-4 items-right justify-between mt-4 mx-auto max-w-xs">
                <!-- <label for="remember_me" class="inline-flex items-center">
                    <x-input-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 ">{{ __('Remember me') }}</span>
                </label> -->
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-blue-500 hover:text-blue-700  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 "
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <a class="underline text-sm text-blue-500 hover:text-blue-700  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 "
                    href="{{ route('register') }}">
                    {{ __('Sign Up') }}
                </a>
            </div>

            <button type="submit"
                class="max-w-xs mx-auto mt-8 tracking-wide font-semibold bg-cyan-500 text-gray-100 w-full py-4 rounded-lg hover:bg-cyan-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                {{ __('Sign In') }}
            </button>

            <div class="mx-auto">
                <a href=""></a>
            </div>
        </div>
    </form>
    <div class="flex items-center gap-4 text-black">
        <!-- <x-secondary-button class="text-black">{{ __('Save') }}</x-secondary-button> -->

        @if (session('status') === 'account-registered')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
        @endif
    </div>
</x-guest-layout>

<script>
    function myFunction() {
        var x = document.getElementById("mypassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>