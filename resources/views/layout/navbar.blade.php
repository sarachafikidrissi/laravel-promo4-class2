<nav class="bg-gray-800 text-white py-3 px-4 flex items-center  justify-between">
    <a class="font-bold text-xl tracking-tight" href="#">My Site</a>
    <div class="flex items-center gap-x-4">
        <a href="{{ route('home.index') }}">Home</a>
        <a href="{{ route('post.index') }}">Post</a>
        <a href="{{ route('candidat.index') }}">Candidat</a>
        <a href="{{ route('product.create') }}">Create a Product</a>
        <a href="{{ route('product.index') }}">Products</a>
        <a href="{{ route('todo.index') }}">Todo</a>
    </div>
</nav>
