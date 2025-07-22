@extends('layout.index')



@section('content')
    <div class="bg-white border rounded-lg px-8 py-6 mx-auto my-8 max-w-2xl">
    <h2 class="text-2xl font-medium mb-4">Update Product</h2>
    <form action="/product/update/{{ $product->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}"
                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
        </div>
        <div class="mb-4">
            <label for="age" class="block text-gray-700 font-medium mb-2">Price</label>
            <input type="number" id="age" name="price" value="{{ old('price', $product->price) }}"
                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
        </div>
        <div class="mb-4">
            <label for="age" class="block text-gray-700 font-medium mb-2">Stock</label>
            <input type="number" id="age" name="stock" value="{{ $product->stock }}"
                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Product Sizes</label>
            <div class="flex flex-wrap -mx-2">
                <div class="px-2 w-1/3">
                    <label for="animal-cat" class="block text-gray-700 font-medium mb-2">
                        <input type="checkbox" id="animal-cat" name="sizes[]" value="s" @checked(in_array('s', $product->sizes)) class="mr-2">S 
                    </label>
                </div>
                <div class="px-2 w-1/3">
                    <label for="animal-dog" class="block text-gray-700 font-medium mb-2">
                        <input type="checkbox" id="" name="sizes[]" value="m" @checked(in_array('m', $product->sizes))
                            class="mr-2">M
                    </label>
                </div>
                <div class="px-2 w-1/3">
                    <label for="animal-bird" class="block text-gray-700 font-medium mb-2">
                        <input type="checkbox" id="animal-bird" name="sizes[]" value="l" @checked(in_array('l', $product->sizes)) class="mr-2">L
                    </label>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700 font-medium mb-2">Description</label>
            <textarea id="message" name="description" 
                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" rows="5">{{ $product->description }}</textarea>
        </div>
        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
        </div>

    </form>
</div>
@endsection