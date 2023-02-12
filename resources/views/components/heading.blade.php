<div class="pb-8 sm:flex sm:items-center">
    <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900 dark:text-gray-400">{{ $title }}</h1>
        <p class="mt-2 text-sm text-gray-700 dark:text-gray-100">{{ $description }}</p>
    </div>
    @if(isset($btnLabel))
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a href="{{ $route }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                {{ $btnLabel }}
            </a>
        </div>
    @endif
</div>
