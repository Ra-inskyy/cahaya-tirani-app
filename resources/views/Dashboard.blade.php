<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden ">
    <div class="text-black font-poppins font-medium text-[40px]">
        {{ __("Selamat Datang di Dashboard!") }}
    </div>
    {{ __("Anda berada dihalaman dashboard!") }}
</div>

        </div>
    </div>
</x-app-layout>