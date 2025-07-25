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

    <div class="w-full  bg-red-400 grid grid-cols-4 gap-2 p-10">
        @foreach ($images as $image)
            <div class="flex flex-col gap-y-2">

              <img src="{{ asset('storage/' . $image->image_name) }}" alt="hhh" class="w-[300px] h-[300px]">
              <form action="/gallery/destroy/{{ $image->id }}" method="post">
                @csrf
                @method('DELETE')
                  <button class="px-4 py-1.5 bg-red-800 rounded-md text-white">Delete</button>
              </form>
            </div>
        @endforeach
    </div>
@endsection
