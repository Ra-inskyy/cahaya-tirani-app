<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-black dark:text-black uppercase tracking-widest hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</button>
