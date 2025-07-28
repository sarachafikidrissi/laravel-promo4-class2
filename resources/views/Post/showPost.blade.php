@extends('layout.index')

@section('content')
    <div class="h-[50vh] p-10">
        <h1>Post Details</h1>

    <div class="w-[20vw]  bg-yellow-100 rounded-md border p-2">
        <h1 class="text-2xl font-bold ">{{ $post->post_title }}</h1>
        <span class="text-sm text-gray-400">{{ $post->author_name }}</span>
        <p>{{ $post->post_description }}</p>
        <p>{{ $post->created_at }}</p>
    </div>



    {{-- post comment --}}


    <div>
        @foreach ($post->comments as $comment)
            <p>{{ $comment->comment }}</p>
        @endforeach
    </div>
    </div>
@endsection
