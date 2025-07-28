@extends('dashboardLoayout.index')

@section('dashboard-content')
    <div class="flex justify-between items-center border-b pb-8">

        <h1 class="text-3xl font-semibold text-[#17313E]">Create your blog easily </h1>
    
        <button class="blogModalBtn flex items-center text-indigo-700 border border-indigo-600 py-2 px-6 gap-2 rounded inline-flex ">
            <span>
                Add Blog
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
            </svg>
        </button>
    </div>



    <div class="">

    </div>
@endsection
