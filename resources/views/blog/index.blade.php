@extends('dashboardLoayout.index')

@section('dashboard-content')
    <div class="flex justify-between items-center border-b pb-8">

        <h1 class="text-3xl font-semibold text-[#17313E]">Create your blog easily </h1>

        <button
            class="blogModalBtn flex items-center text-indigo-700 border border-indigo-600 py-2 px-6 gap-2 rounded inline-flex ">
            <span>
                Add Blog
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
            </svg>
        </button>
    </div>
    {{-- blogs --}}
    <div class="w-full  grid grid-cols-3 gap-4">
        @foreach ($blogs as $blog)
            <div class="max-w-sm rounded overflow-hidden shadow-lg" style="font-family: 'Strait', sans-serif;">
                <img class="w-full h-[300px]" src="{{ asset('storage/' . $blog->cover) }}" alt="">
                <div class="px-6 py-4 flex flex-col gap-y-2">
                    <div class="font-bold text-xl ">
                        {{ $blog->title }}
                    </div>
                    <p class="text-gray-700 text-base">
                        {{ $blog->description }}
                    </p>
                    <div class="flex gap-x-4">

                        <button
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border border-green-700 rounded editBtn">
                            Edit
                        </button>
                        {{-- delete --}}
                        <form action="/blog/{{ $blog->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>

            </div>

            {{-- update form --}}


            <div
                class="bg-white border rounded-lg px-8 py-6 mx-auto my-8  w-[40vw] absolute top-[20%] left-[40%] editModal hidden">
                <h2 class="text-2xl font-medium mb-4">Edit Blog</h2>
                <form  enctype="multipart/form-data" action="/blog/{{ $blog->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Title</label>
                        <input type="text" id="name" name="title" value="{{ $blog->title }}"
                            class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                            required>
                    </div>


                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-medium mb-2">Description</label>
                        <textarea id="message" name="description"
                            
                            class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" rows="5">{{ $blog->description }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Blog Cover</label>
                        <input type="file" accept="image/png, image/jpg, image/jpeg" id="name" name="cover"
                            class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                            >
                    </div>
                    <div class="flex justify-between">

                        <button class="bg-blue-900 text-white px-4 py-2 rounded-lg cancel hover:bg-blue-600">Cancel</button>
                        <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
                    </div>

                </form>
            </div>
        @endforeach
    </div>
@endsection
