@extends('layout.index')

@section('content')

<div class="antialiased text-gray-900 ">
  <div class="bg-gray-200  p-8 flex items-center justify-center">
    <div class="bg-white rounded-lg  shadow-2xl xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 group overflow-hidden transition-transform duration-300 hover:translate-y-[-10px]">
      <div class="h-48 w-full overflow-hidden">
              <img class="h-full w-full object-cover transform overflow-hidden transition-transform duration-[300ms] group-hover:scale-125 object-end" src="https://images.unsplash.com/photo-1570797197190-8e003a00c846?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=968&q=80" alt="Home in Countryside" />
      </div>

      <div class="p-6 pb-4 group-hover:bg-gray-700 duration-[0.3s]">
       
      
       <div class="mt-1">
          <span class="text-2xl font-semibold">${{ $product->price }}</span>
        </div>
        <h4 class="mt-1 font-semibold text-xl leading-tight truncate group-hover:text-teal-600 duration-[0.3s]">{{ $product->name }}</h4>
        <p class="Card-info text-gray-500 mt-2 group-hover:text-white">
         {{ $product->description }}
          </p> 
        
      
          <div class="mt-4 flex items-center gap-x-4">

              <p class="font-bold"> Product Sizes : </p>
            @foreach ($product->sizes as $size)
                <p class="Card-info text-gray-500  group-hover:text-white">
                   {{ $size}},
          </p> 

            @endforeach
            
          </div>
          
      </div>
    </div>
  </div>
</div>
@endsection