@extends('layout.index')


@section('content')
    <div class="bg-gradient-to-r from-indigo-200 via-purple-200 to-pink-200  flex flex-col gap-y-10  items-center p-4">

        <div class="bg-white shadow-2xl rounded-2xl w-full max-w-md p-6">
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">📝 To-Do List</h1>

            <form action="/todo/store" method="post" class="flex mb-4">
                @csrf
                <input type="text" id="taskInput" placeholder="Enter a task" name="task" required
                    class="flex-grow p-2 rounded-l-md border border-gray-300 focus:outline-none" />
                <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-r-md hover:bg-indigo-600">
                    Add
                </button>
            </form>
        </div>


        <div class="w-full grid grid-cols-4 gap-2">
            @foreach ($todos as $todo)
                <div class="w-[300px] h-[300px]  rounded-md p-5 relative edit" style="background-color: {{ $todo->color }}">
                    <textarea name="" id="" cols="30" rows="10" class="outline-0 text-xl h-[80%]"  readonly>{{ $todo->task }}</textarea>

                    <div class="flex gap-x-4 absolute right-2">
                        {{-- delete --}}
                        <form action="/todo/destroy/{{ $todo->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red"
                                    class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                </svg>
                            </button>
                        </form>


                        {{-- update --}}
                        <form action="/todo/update/{{ $todo->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="text" id=""   value="" name="updatedTask" class="hidden">
                            <button class="px-2 py-1 bg-green-700 text-white rounded-md hidden">Save</button>
                        </form>
                        {{-- Allow update --}}
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                        </button>

                        
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
