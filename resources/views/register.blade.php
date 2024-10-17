@extends('components.template')

@section('title', 'Register')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-center">Register</h1>
            <form class="space-y-4">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="name">Name</label>
                    <input type="text" id="name" required class="block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="email">Email</label>
                    <input type="email" id="email" required class="block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="password">Password</label>
                    <input type="password" id="password" required class="block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" class="w-full p-2 mt-4 font-semibold text-white bg-green-600 rounded-md hover:bg-green-500">Daftar</button>
            </form>
            <p class="text-sm text-center">Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Masuk sekarang</a></p>
        </div>
    </div>
@endsection