@extends('layout.index')

@section('content')
    <div class="p-4 flex flex-col items-center gap-y-4">

        <h1 class="text-3xl text-center">Download file</h1>


        <form action="/url/store" method="post">
            @csrf
            <input type="url"  name="url"  class="border ps-5 w-[30vw] py-1.5" placeholder="insert a valid url">
            <button class="px-4 py-1.5 bg-green-800 text-white rounded-md">Download</button>

        </form>
    </div>
@endsection
