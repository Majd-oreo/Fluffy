<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
@include('user.header')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <!-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif -->
            <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                {{ __('You dont have an account?') }}
            </a>

            <x-danger-button class="ms-3">
                {{ __('Log in') }}
            </x-danger-button>
        </div>
    </form>
</x-guest-layout>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("form");

        form.addEventListener("submit", function (event) {
            let valid = true;
            let errors = {};

            // Email Validation
            const email = document.getElementById("email").value.trim();
            const emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
            if (!emailPattern.test(email)) {
                errors.email = "Enter a valid email address.";
                valid = false;
            }

            // Password Validation (At least 8 characters, 1 uppercase, 1 lowercase, 1 number, 1 special character)
            const password = document.getElementById("password").value;
            if (password.length < 8) {
                errors.password = "Password must be at least 8 characters long.";
                valid = false;
            }

            // Display Errors
            document.querySelectorAll(".error-message").forEach(el => el.remove());

            for (const field in errors) {
                const inputField = document.getElementById(field);
                const errorMessage = document.createElement("p");
                errorMessage.className = "error-message text-red-500 text-sm mt-1";
                errorMessage.textContent = errors[field];
                inputField.insertAdjacentElement("afterend", errorMessage);
            }

            if (!valid) {
                event.preventDefault();
            }
        });
    });
</script>
