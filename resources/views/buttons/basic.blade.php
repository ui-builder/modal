<span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
    <button type="button" {{ $attributes }}
        class="flex justify-center px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out border border-transparent rounded-md focus:outline-none focus:shadow-outline-default {{ $background ?? 'bg-default-600 focus:border-default-700 hover:bg-default-500 active:bg-default-700' }}">
        {{ $slot }}
    </button>
</span>