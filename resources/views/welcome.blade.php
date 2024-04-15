@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="flex flex-col items-center justify-center h-full">
        <div>
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-200 text-center">Welcome to Eli's Laravel Starter!</h1>
            <p class="text-lg text-gray-600 dark:text-gray-300 text-center">This is a starter template for your next big idea.</p>
            <p class="text-lg text-gray-600 dark:text-gray-300 text-center">
                This template includes many tools I use in every project. Refer to the <span class="font-bold">README.md</span> file for more information.
            </p>
            <div class="flex items-center justify-center h-full space-x-4">
                <div>
                    <x-button target="_blank" href="https://laravel.com/docs" color="red">Laravel</x-button>
                </div>
                <div>
                    <x-button target="_blank" href="https://livewire.laravel.com" color="pink">Livewire</x-button>
                </div>
                <div>
                    <x-button target="_blank" href="https://tailwindcss.com" color="blue">Tailwind CSS</x-button>
                </div>
                <div>
                    <x-button target="_blank" href="https://alpinejs.dev" color="teal">Alpine.js</x-button>
                </div>
                <div>
                    <x-button target="_blank" href="https://tallstackui.com">TallStack UI</x-button>
                </div>
            </div>
        </div>
    </div>
@endsection
