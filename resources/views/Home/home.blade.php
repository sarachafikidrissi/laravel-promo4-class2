@extends('layout.index')

@section('content')
    <div class="h-[80vh]">

        <h1>Participants: </h1>

        <ul>
            @foreach ($participants as $participant)
                <li><span class="font-bold text-xl">Name: </span>{{ $participant->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection