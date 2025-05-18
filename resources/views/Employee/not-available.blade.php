<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4 py-8">
    <div class="bg-white shadow-xl rounded-xl p-8 max-w-md w-full text-center border-l-8 border-red-500 transform transition-all duration-300 hover:scale-[1.02]">
        <div class="flex flex-col items-center space-y-6">
            <!-- Animated X icon -->
            <div class="animate-bounce">
                <svg class="w-20 h-20 text-red-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-12.728 12.728M5.636 5.636l12.728 12.728" />
                </svg>
            </div>
            
            <!-- Main message -->
            <div class="space-y-2">
                <h1 class="text-3xl font-bold text-red-600">Access Denied</h1>
                <p class="text-gray-600 text-lg">Your account is currently <span class="font-semibold text-red-500">inactive</span>.</p>
            </div>
            
            <!-- Additional information -->
            <div class="bg-red-50 p-4 rounded-lg w-full text-left space-y-2">
                <div class="flex items-start">
                    <svg class="w-5 h-5 text-red-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-gray-700">Please contact your administrator to activate your account.</p>
                </div>
                <div class="flex items-start">
                    <svg class="w-5 h-5 text-red-500 mt-0.5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <p class="text-gray-700">Email: <span class="font-medium">admin@example.com</span></p>
                </div>
            </div>
            
            <!-- Action button -->
            <div class="pt-4 w-full">
                <a href="/" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Return to Home
                </a>
            </div>
        </div>
    </div>
</div>