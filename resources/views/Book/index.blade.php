@extends('dashboardLoayout.index')

@section('dashboard-content')
    <div class="flex justify-between items-center border-b pb-8">

        <h1 class="text-3xl font-semibold text-[#17313E]">Create your book easily </h1>

        <button
            class="bookModalBtn flex items-center text-indigo-700 border border-indigo-600 py-2 px-6 gap-2 rounded inline-flex ">
            <span>
                Add book
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
            </svg>
        </button>
        <button
            class="catModalBtn flex items-center text-indigo-700 border border-indigo-600 py-2 px-6 gap-2 rounded inline-flex ">
            <span>
                Add Category
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
            </svg>
        </button>
        <button
            class="authModalBtn flex items-center text-indigo-700 border border-indigo-600 py-2 px-6 gap-2 rounded inline-flex ">
            <span>
                Add Author
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
            </svg>
        </button>
    </div>


    {{--  --}}


    <h1 class="text-3xl font-semibold mt-2">Books avaiable</h1>
    <div class="w-full  mt-10 grid grid-cols-4 gap-4 p-4">
        @foreach ($books as $book)
            <div class="w-[15vw] h-[40vh] flex flex-col gap-y-1 border rounded-xl p-2">
                <img src="{{ asset('storage/' . $book->cover) }}" alt="" class="w-full h-[70%]">
                <div>

                    <h1 class="text-xl font-bold">{{ $book->name }}</h1>
                    <h2 class="text-sm">{{ $book->author->name }}</h2>
                </div>
                <span class="border rounded-md px-2 py-0.5 text-sm w-fit bg-green-300">{{ $book->category->name }}</span>

            </div>
        @endforeach
    </div>
@endsection
