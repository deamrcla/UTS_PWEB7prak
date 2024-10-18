@extends('components.template')
@section('title', 'homepage')
@section('content')
    {{-- <h1>ini homepage</h1> --}}

    <div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-r from-blue-100 via-pink-300 to-blue-400">
        <!-- Animated Heading -->
        {{-- <h1 class="text-5xl font-extrabold text-blue-200 mb-10 animate-bounce text-shadow">
            Welcome to our Team!
        </h1>  --}}

        <head>
            <style>
                .text-shadow {
                    text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.5);
                }
            </style>
        </head>
        <h1 class="text-5xl font-extrabold text-purple-900 mb-10 animate-bounce text-shadow">
            Welcome to our Team!
        </h1>
        <h2 class="text-2xl font-arial text-pink-700 mb-10 animate-bounce">
            Allo guyss🐋 </h2>
        <div class="flex space-x-6">
            <!-- Enhanced Login Button -->
            <a href="/login" class="relative inline-flex items-center justify-center px-6 py-3 overflow-hidden font-medium text-white transition duration-300 ease-out border-2 border-blue-500 rounded-full shadow-md group hover:bg-white">
                <span class="absolute inset-0 flex items-center justify-center w-full h-full text-blue-500 duration-300 transform -translate-x-full bg-white group-hover:translate-x-0 ease">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H3m0 0l3.3 3.3M3 12l3.3-3.3M21 12H9"></path>
                    </svg>
                </span>
                <span class="absolute flex items-center justify-center w-full h-full text-white transition-all duration-300 transform group-hover:translate-x-full ease">Login</span>
                <span class="relative invisible">Login</span>
            </a>
            <!-- Enhanced Register Button -->
            <a href="/register" class="relative inline-flex items-center justify-center px-6 py-3 overflow-hidden font-medium text-white transition duration-300 ease-out border-2 border-green-500 rounded-full shadow-md group hover:bg-white">
                <span class="absolute inset-0 flex items-center justify-center w-full h-full text-green-500 duration-300 transform -translate-x-full bg-white group-hover:translate-x-0 ease">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H3m0 0l3.3 3.3M3 12l3.3-3.3M21 12H9"></path>
                    </svg>
                </span>
                <span class="absolute flex items-center justify-center w-full h-full text-white transition-all duration-300 transform group-hover:translate-x-full ease">Register</span>
                <span class="relative invisible">Register</span>
            </a>
        </div>
    </div>
    
@endsection