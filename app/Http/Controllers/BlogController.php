<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(([
            "title" => "required|string|max:30",
            "description" => "required|string|max:2050",
            "cover" => "required|mimes:png,jpg,jpeg|max:2048"
        ]));

        $path = $request->file('cover')->store('blogs', 'public');

        Blog::create([
            "title" => $request->title,
            "description" => $request->description,
            "cover" => $path
        ]);
        flash()->success('Blog has been added successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //

        $cover = $request->cover;

        if($cover){
            //logic to update image
            $path = storage_path('app/public/' . $blog->cover);


            $storage = Storage::disk('public');
            if(file_exists($path)){
                $storage->delete($path);
                //* image coming from request ==== > move(param1=(relative path) , param2=(image name coming from database))
                $cover->move(storage_path('app/public/blogs/') , $blog->cover);
            }
        }

        $blog->update([
            "title" => $request->title,
            "description" => $request->description
        ]);

        return back();


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
        $path = $blog->cover;

        $storage = Storage::disk('public');

        if($storage->exists($path)){
            $storage->delete($path);
            $blog->delete();
        }

        flash()->success('Blog has been deleted successfully!');
        return back();
    }
}
