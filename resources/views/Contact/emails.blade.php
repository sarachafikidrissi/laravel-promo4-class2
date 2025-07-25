@extends('layout.index')

@section('content')
    {{-- filter --}}
    <form action="/email/filter" method="post" class="flex gap-x-10 items-center mt-4 mx-10">
        @csrf

        <!-- Email Priority Filter -->
        <div class="flex items-center">
            <label for="emailPriority" class="mr-2 text-gray-700 font-bold">Priority:</label>
            <select name="emailPriority" class="p-2 border border-gray-300 rounded-md">
                <option value="all">All</option>
                <option value="high">High</option>
                <option value="medium">Medium</option>
                <option value="low">Low</option>
            </select>
        </div>

        <!-- Read/Unread Filter -->
        <div class="flex items-center">
            <label for="isRead" class="mr-2 text-gray-700 font-bold">Status:</label>
            <select name="isRead" class="p-2 border border-gray-300 rounded-md">
                <option value="all">All</option>
                <option value="1">Read</option>
                <option value="0">Unread</option>
            </select>
        </div>

        <!-- Sort Order -->
        <div class="flex items-center">
            <label for="sortOrder" class="mr-2 text-gray-700 font-bold">Sort By:</label>
            <select name="sortOrder" class="p-2 border border-gray-300 rounded-md">
                <option value="latest">Latest First</option>
                <option value="oldest">Oldest First</option>
            </select>
        </div>

        {{-- sort button --}}

        <button class="px-4 py-1.5 bg-yellow-300 text-white rounded-md">Filter</button>
    </form>



    {{-- table --}}
    <table class="min-w-full mt-10 table-auto bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-200 text-gray-700">
            <tr>
                <th class="px-4 py-2 text-left">Id</th>
                <th class="px-4 py-2 text-left">Name</th>
                <th class="px-4 py-2 text-left">Email</th>
                <th class="px-4 py-2 text-left">Phone</th>
                <th class="px-4 py-2 text-left">Email Priority</th>
                <th class="px-4 py-2 text-left">Message</th>
                <th class="px-4 py-2 text-left">Is Read</th>
                <th class="px-4 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600">
            <!-- Example Row -->

            @foreach ($mails as $mail)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $mail->id }}</td>

                    <td class="px-4 py-2">{{ $mail->name }}</td>
                    <td class="px-4 py-2">{{ $mail->email }}</td>
                    <td class="px-4 py-2">{{ $mail->phone }}</td>
                    <td class="px-4 py-2">{{ $mail->email_priority }}</td>
                    <td class="px-4 py-2">{{ $mail->message }}</td>
                    <td class="px-4 py-2 text-center">
                        <form action="/email/update/{{ $mail->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="checkbox" @checked($mail->is_read == 1) onchange = 'submit()' name="is_read"
                                value="1"
                                class="inline-block px-2 py-1 text-xs font-semibold text-white bg-green-500 rounded-full" />
                            <button class="hidden">update</button>
                        </form>
                    </td>
                    <td class="px-4 py-2 text-center">
                        <form action="/email/destroy/{{ $mail->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded focus:outline-none focus:shadow-outline">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
