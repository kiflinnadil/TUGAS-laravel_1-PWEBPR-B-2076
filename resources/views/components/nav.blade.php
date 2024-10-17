<nav class="bg-gray-800 p-4 shadow-md">
    <div class="container mx-auto flex items-center justify-between">
        <div class="text-white text-2xl font-bold">
            <a href="{{ route('register') }}">MyApp</a>
        </div>
        <ul class="flex space-x-6 text-white">
            <li>
                <a href="{{ route('login') }}" class="hover:text-blue-400 transition">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="hover:text-blue-400 transition">Register</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="hover:text-blue-400 transition">Contact</a>
            </li>
            {{-- <li class="relative group">
                <a href="#" class="hover:text-blue-400 transition">Contact</a>
                <ul class="absolute hidden group-hover:block bg-gray-700 text-white rounded-lg shadow-md mt-2 w-48">
                    <li>
                        <a href="{{ route('contact') }}" class="block px-4 py-2 hover:bg-gray-600 transition">View Contacts</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-600 transition">Add Contact</a>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </div>
</nav>