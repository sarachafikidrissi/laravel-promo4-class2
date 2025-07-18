@extends('layout.index')


@section('content')
    <div class=" flex justify-center w-full p-10">
        <form action="/candidat/store" method="post" class="w-[60%] h-full bg-amber-100 p-4 rounded-md flex flex-col gap-y-4">
            @csrf
            <h1 class="text-3xl font-bold text-center">Candidat Registration</h1>

            <div class="flex flex-col gap-y-1.5">
                <label for="" class="font-bold">Name</label>
                <input type="text" name="candidat_name" required id="" placeholder="enter your name" class="border px-2 py-1 w-[50%]">
            </div>
            <div class="flex flex-col gap-y-1.5">
                <label class="font-bold" for="">Email</label> 
                <input  class="border px-2 py-1 w-[50%]" type="email" name="candidat_email" required id="" placeholder="enter your email">
            </div>
            <div class="flex flex-col gap-y-1.5">
                <label class="font-bold" for="">Age</label>
                <input  class="border px-2 py-1 w-[50%]" type="number" name="candidat_age" required id="" placeholder="enter your age">
            </div>
            <div class="flex flex-col gap-y-1.5">
                <label class="font-bold" for="">Phone</label>
                <input  class="border px-2 py-1 w-[50%]" type="text" name="candidat_phone" required id="" placeholder="enter your phone number">
            </div>
            <div class="">
                <label class="font-bold" for="media">Media</label>
                <input   type="radio" name="school" id="media" value="media" >
                <label class="font-bold" for="cooding">Cooding</label>
                <input   type="radio" name="school" value="cooding" id="cooding">
            </div>
            <div >
                <label class="font-bold" for="male">Male</label>
                <input  type="radio" name="gender" id="male" value="male" >

                <label class="font-bold" for="female">Female</label>
                <input  type="radio" name="gender" value="female" id="female">
            </div>


            <div class="flex flex-col gap-y-1.5">
                <label class="font-bold" for="">English Level</label>
                <input  class="border px-2 py-1 w-[50%]" type="range" name="english_level" id="" min="0" max="100" required>
            </div>

            <div class="flex flex-col gap-y-1.5">
                <label class="font-bold " for="">Choose your campus :</label>
                <select name="campus" id="" class="border">
                    <option value="" disabled selected>Select Campus</option>
                    <option value="casa">Casablanca</option>
                    <option value="fes">Fes</option>
                    <option value="rabat">Rabat</option>
                </select>
            </div>
            <div >
                <label class="font-bold" for="">Terms</label>
                <input   type="checkbox" name="terms" id="" value="1" required>
            </div>

            <button class="px-4 py-2 border rounded-md bg-amber-500/20 font-bold">Submit Form</button>
        </form>
    </div>
@endsection