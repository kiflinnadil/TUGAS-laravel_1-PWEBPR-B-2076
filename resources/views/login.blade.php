@extends('components.template')

@section('title', 'Login')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-center">Login</h1>
            <form action="{{ route('contact') }}" method="GET" class="space-y-4">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="email">Email</label>
                    <input type="email" id="email" name="email" class="block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="password">Password</label>
                    <input type="password" id="password" name="password" class="block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" class="w-full p-2 mt-4 font-semibold text-white bg-blue-600 rounded-md hover:bg-blue-500">Login</button>
            </form>
            <p class="text-sm text-center">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Daftar sekarang</a></p>
        </div>
    </div>
@endsection