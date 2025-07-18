@extends('layout.index')

@section('content')
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Age</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gender</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">School</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Campus</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($candidats as $candidat)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $candidat->candidat_name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $candidat->candidat_email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $candidat->candidat_age }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $candidat->candidat_phone }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $candidat->gender }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $candidat->school }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $candidat->campus}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button
                            class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Edit</button>
                        <button
                            class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
