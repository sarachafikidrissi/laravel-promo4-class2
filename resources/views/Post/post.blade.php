@extends('layout.index')


@section('content')
    <div class="h-[80vh] p-10 flex gap-x-10">

        <form action="/post/store" method="post" class="w-[50vh] h-[100%] border p-2 flex flex-col  gap-y-10 ">

            @csrf
            <div class="flex flex-col ">
                <label class="font-bold" for="">Post Athor</label>
                <input type="text" class="border p-2" placeholder="enter your name" name="author_name">
            </div>
            <div class="flex flex-col ">
                <label class="font-bold" for="">Post Title</label>
                <input type="text" class="border p-2" placeholder="enter post title" name="post_title">
            </div>
            <div class="flex flex-col ">
                <label class="font-bold" for="">Post Description</label>
                <textarea type="text" class="border p-2" placeholder="enter post description"  name="post_description"> </textarea>
            </div>


            <button type="submit" class="border w-[200px] bg-green-300 rounded-md py-2 m-auto">Add Post</button>

        </form>

        {{-- show all posts --}}
        <div class="w-[70vw] h-[50vh] flex flex-wrap gap-2 ">
            @foreach ($posts as $post)
                <div class="w-[20vw] bg-yellow-100 rounded-md border p-2 flex flex-col gap-y-2">
                   <h1 class="text-2xl font-bold ">{{ $post->post_title }}</h1>
                   <span class="text-sm text-gray-400">{{ $post->author_name }}</span>
                   <p>{{ $post->post_description }}</p>
                   <p>{{ $post->id }}</p>
                   <a href="/posts/{{ $post->id }}" class="text-blue-600 underline">see details</a>
                   {{-- coomments --}}
                    <form action="/comment/store" method="post">
                        @csrf

                        <input type="text" name="comment" placeholder="enter your comment">
                        <input type="text" name="post_id" value="{{ $post->id }}" id="" class="hidden">
                        <button class="px-2 py-0.5 bg-red-100">Save</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
