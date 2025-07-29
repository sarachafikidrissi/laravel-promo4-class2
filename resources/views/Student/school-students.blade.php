@extends('layout.index')

@section('content')
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Class</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <form action="/assign-course/store" method="post">
                @csrf

                @foreach ($students as $student)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student->name}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $student->class }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @foreach ($courses as $course)
                            <label for="">{{ $course->name }}</label>

                                <input type="checkbox" name="courses[{{ $student->id }}][]" @checked($student->courses->contains($course->id))  value="{{ $course->id }}" id="">
                            @endforeach
                        </td>
                    </tr>
                @endforeach
    
                 <td class="px-6 py-4 whitespace-nowrap">
                            <button
                                class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Assign Course</button>
                </td>
            </form>

        </tbody>
    </table>




@endsection