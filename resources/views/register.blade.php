@extends('components.template')
@section('title', 'register')
@section('content')
{{-- register --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-r from-blue-100 via-pink-400 to-blue-400">
    <!-- Animated Heading -->
    <head>
        <style>
            .text-shadow {
                text-shadow: 4px 2px 4px rgba(0, 0, 0, 0.5);
            }
        </style>
    </head>
    <h1 class="text-5xl font-extrabold text-purple-900 mb-10 animate-bounce text-shadow">
        Register!
    </h1>
    <div class="bg-gradient-to-r from-blue-200 to-pink-200 p-10 rounded-lg shadow-lg transition-transform transform hover:translate-y-[-10px] hover:shadow-xl w-full max-w-md">
        <h2 class="text-2xl font-semibold text-center text-pink-700 mb-5">Create Your Account</h2>
        <form class="flex flex-col">
            <input type="text" name="username" placeholder="Username" required class="p-3 mb-3 border border-gray-300 rounded-md focus:outline-none focus:border-green-500 transition-colors duration-300">
            <input type="email" name="email" placeholder="Email" required class="p-3 mb-3 border border-gray-300 rounded-md focus:outline-none focus:border-green-500 transition-colors duration-300">
            <input type="text" name="phone" placeholder="Phone" required class="p-3 mb-3 border border-gray-300 rounded-md focus:outline-none focus:border-green-500 transition-colors duration-300">
            <input type="password" name="password" placeholder="Password" required class="p-3 mb-3 border border-gray-300 rounded-md focus:outline-none focus:border-green-500 transition-colors duration-300">
            <button type="submit" class="p-3 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors duration-300">Register</button>
        </form>
        <div class="text-center mt-4 text-sm">
            Already have an account? <a href="/login" class="text-green-500 font-bold hover:underline ">Login here</a>
        </div>
    </div>

</body>
</html>

            </tbody>
        </table>
    </div>
@endsection
