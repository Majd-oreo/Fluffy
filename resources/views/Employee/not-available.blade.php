<x-app-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div class="bg-white shadow-lg rounded-xl p-8 max-w-lg text-center border-l-4 border-red-500">
            <div class="flex flex-col items-center space-y-4">
                <svg class="w-16 h-16 text-red-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18.364 5.636l-12.728 12.728M5.636 5.636l12.728 12.728" />
                </svg>
                <h1 class="text-2xl font-bold text-red-600">Access Denied</h1>
                <p class="text-gray-600">Your account is currently <span class="font-semibold text-red-500">inactive</span>.</p>
                <p class="text-gray-500 text-sm">Please contact the administrator to activate your account and gain access to the employee dashboard.</p>
            </div>
        </div>
    </div>
</x-app-layout>
