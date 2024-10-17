@extends('components.template')

@section('title', 'Contact')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-4xl p-8 bg-white rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4 text-center">Contact Page</h1>

            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-2 px-4">No</th>
                        <th class="py-2 px-4">Name</th>
                        <th class="py-2 px-4">Role</th>
                        <th class="py-2 px-4">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $people = [
                            ['name' => 'John Doe', 'role' => 'Mahasiswa', 'email' => 'john@example.com'],
                            ['name' => 'Jane Smith', 'role' => 'Karyawan', 'email' => 'jane@example.com'],
                            ['name' => 'David Lee', 'role' => 'Mahasiswa', 'email' => 'david@example.com'],
                        ];
                    @endphp

                    @foreach($people as $index => $person)
                    <tr class="{{ $loop->even ? 'bg-gray-100' : 'bg-white' }}">
                        <td class="py-2 px-4">{{ $index + 1 }}</td>
                        <td class="py-2 px-4">{{ $person['name'] }}</td>
                        <td class="py-2 px-4">{{ $person['role'] }}</td>
                        <td class="py-2 px-4">{{ $person['email'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection