@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-white dark:border-sky-400 text-sm font-medium leading-5 text-white dark:text-white focus:outline-none focus:border-sky-400 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white dark:text-sky-400 hover:text-white dark:hover:text-sky-400 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-white dark:focus:text-white focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
