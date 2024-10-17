<nav class="bg-gray-800 p-4 shadow-md ">
    <div class="w-fullcontainer mx-auto flex items-center justify-between">
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
        </ul>
    </div>
</nav>

{{-- <nav class="flex gap-4 p-4 w-full bg-slate-400">
    <a href="/">Register</a>
    <a href="login">Login</a>
    <a href="contact">Contact</a>
</nav> --}}