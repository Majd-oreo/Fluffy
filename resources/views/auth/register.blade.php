@include('user.header')

<x-guest-layout>
<h1 style="font-size: 2rem; padding-bottom: 26px; text-align: center; font-weight: bold; color: #ff5b2e;">Sign Up</h1>

<div>

<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autocomplete="tel" placeholder="Phone Number" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" autocomplete="text" placeholder="Address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Image Upload -->
        <div class="mt-4">
            <input id="image" name="image" type="file" class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" />
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-danger-button class="ms-4">
                {{ __('Register') }}
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

            const name = document.getElementById("name").value.trim();
            if (name === "" || name.length > 255) {
                errors.name = "Name is required and must be less than 255 characters.";
                valid = false;
            }

            const email = document.getElementById("email").value.trim();
            const emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
            if (!emailPattern.test(email)) {
                errors.email = "Enter a valid email address.";
                valid = false;
            }

            // Phone Validation (Jordanian format: 07[7-9]xxxxxxx)
            const phone = document.getElementById("phone").value.trim();
            const phonePattern = /^07[7-9][0-9]{7}$/;
            if (!phonePattern.test(phone)) {
                errors.phone = "Enter a valid Jordanian phone number (07[7-9]xxxxxxx).";
                valid = false;
            }

            const password = document.getElementById("password").value;
            const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#]).{8,}$/;
            if (!passwordPattern.test(password)) {
                errors.password = "Password must be at least 8 characters, contain a capital letter, a number, and a special symbol.";
                valid = false;
            }

            const confirmPassword = document.getElementById("password_confirmation").value;
            if (password !== confirmPassword) {
                errors.password_confirmation = "Passwords do not match.";
                valid = false;
            }

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
