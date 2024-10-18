@extends('components.template')
@section('title', 'login')
@section('content')
    {{-- <h1>Ini Login</h1> --}}

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
            Login!
        </h1>

        <div class="container mx-auto p-4">
            <table class="min-w-full max-w-md bg-white border border-gray-300 rounded-lg shadow-md">
                <thead>
                    <tr class="bg-blue-200 text-pink-700">
                        <th class="py-2 px-3 text-left border-b border-gray-300">No.</th>
                        <th class="py-2 px-3 text-left border-b border-gray-300">Name</th>
                        <th class="py-2 px-3 text-left border-b border-gray-300">Email</th>
                        <th class="py-2 px-3 text-left border-b border-gray-300">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="hover:bg-blue-100 transition duration-200 ease-in-out">
                            <td class="py-2 px-3 border-b border-gray-300">{{ $loop->iteration }}</td>
                            <td class="py-2 px-3 border-b border-gray-300">{{ $contact["name"] }}</td>
                            <td class="py-2 px-3 border-b border-gray-300">{{ $contact["email"] }}</td>
                            <td class="py-2 px-3 border-b border-gray-300">{{ $contact["phone"] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
            


            </tbody>
        </table>
    </div>
@endsection
