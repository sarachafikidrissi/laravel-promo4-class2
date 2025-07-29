<nav class="w-[25vw] h-screen bg-gray-800 p-10 flex flex-col gap-y-10 fixed top-0 left-0">
    <h1 class="text-white text-3xl ">Cooding School Blog </h1>

    <div class="w-full   flex flex-col gap-y-10 ">
        <div class="flex gap-x-5 items-center hover:bg-[#415E72] rounded-xl cursor-pointer p-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FDFFB8" class="bi bi-pencil-fill"
                viewBox="0 0 16 16">
                <path
                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
            </svg>
            <a href="{{ route('blog.index') }}" class="text-2xl font-bold text-[#F3E2D4]">Blogs</a>
        </div>
        <div class="flex gap-x-5 items-center hover:bg-[#415E72] rounded-xl cursor-pointer p-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FDFFB8"
                class="bi bi-book-half" viewBox="0 0 16 16">
                <path
                    d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
            </svg>
            <a href="{{ route('book.index') }}" class="text-2xl font-bold text-[#F3E2D4]">Book Store</a>
        </div>

    </div>
</nav>
