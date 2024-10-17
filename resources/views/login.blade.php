@extends('components.template')

@section('title', 'Login')

@section('content')
    <div class="flex items-center justify-center min-h-screen from-purple-300 to-blue-300">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold text-center text-gray-900">Login</h1>
            <form action="{{ route('contact') }}" method="GET" class="space-y-4">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="email">Email</label>
                    <input type="email" id="email" name="email" required class="block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="password">Password</label>
                    <input type="password" id="password" name="password" required class="block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" class="w-full p-2 mt-4 font-semibold text-white bg-gradient-to-r from-blue-600 to-purple-600 rounded-md hover:from-blue-500 hover:to-purple-500 transition">Login</button>
            </form>
            <p class="text-sm text-center text-gray-700">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Daftar sekarang</a></p>
        </div>
    </div>
@endsection
