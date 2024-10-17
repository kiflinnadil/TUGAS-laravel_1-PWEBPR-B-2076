@extends('components.template')

@section('title', 'Contact')

@section('content')
    <div class="flex items-center justify-center pt-25 min-h-screen bg-gray-100">
        <div class="w-full max-w-15xl p-7 bg-white rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Contact Page</h1>

            <table class="min-w-full table-auto border-collapse border border-gray-300 shadow-md">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left">No.</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Mahasiswa</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Phone</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Alamat</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Pekerjaan</th>
                    </tr>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $contact)
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $contact['name'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $contact['email'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $contact['phone'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $contact['address'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $contact['occupation'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
