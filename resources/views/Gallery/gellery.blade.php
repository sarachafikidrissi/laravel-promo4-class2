@extends('layout.index')

@section('content')
    <form action="/gallery/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col justify-center w-[300px] gap-y-2 p-10">
            <label class=" font-bold">Choose an image</label>
            <input type="file" accept="image/jpg, image/png" name="image_name" class="border" placeholder="choose an image" />

            <button class="px-4 py-1.5 bg-green-500 rounded-md">Save Image</button>
        </div>
    </form>

    <h1 class="text-3xl font-bold px-10">Gallery</h1>
    <div class="w-full   grid grid-cols-4 gap-2 p-10">
        @foreach ($images as $image)
            <div class="flex flex-col gap-y-2 relative">

                <img src="{{ asset('storage/' . $image->image_name) }}" alt="hhh" class="w-[300px] h-[300px]">
                <form action="/gallery/destroy/{{ $image->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-1.5 bg-red-800 rounded-md text-white">Delete</button>
                </form>

                <button class=" galleryEdit px-4 py-1.5 bg-yellow-600 rounded-md">Click to edit</button>

                <div class="w-[400px] h-[200px] bg-blue-300 rounded-md hidden absolute bottom-[100%]">
                    <form action="/gallery/update/{{ $image->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col justify-center w-[300px] gap-y-2 p-10 relative">
                            <label class=" font-bold">Choose an image</label>

                            <input type="file" accept="image/jpg, image/png" name="image_name" class="border"
                                placeholder="choose an image" />
                            <button class="px-4 py-1.5 bg-green-500 rounded-md">Save Image</button>
                          </div>
                        </form>
                        <button class="closeBtn absolute top-10 right-10">X</button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
