<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $images = Gallery::all();
        return view('Gallery.gellery', compact('images'));
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
        //

        $request->validate([
            "image_name" => "required|mimes:png,jpg|max:2048"
        ]);

        //* retrieve image content from request + store the image in public folder (local)
        $path = $request->file('image_name')->store('gallery', 'public');

        //* store the image path in database

        Gallery::create([
            "image_name" => $path
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
         $request->validate([
            "image_name" => "required|mimes:png,jpg|max:2048"
        ]);

        //* retireve relative path of a file
        $path = storage_path('app/public/' . $gallery->image_name);

        $storage = Storage::disk('public');

        //* check if the path exists in local storage ==> delete/replace

        if(file_exists($path)){
            $storage->delete($path);
            //*replace old image with new image in a scpecific storage path
            $request->image_name->move(storage_path('app/public/gallery/'), $gallery->image_name);
        }
       return back();





    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //

        $path = $gallery->image_name;



        //* retrieve the public storage 
        
        $storage = Storage::disk('public');


        //* checks if the local storage contains the image to be deleted
        if ($storage->exists($path)) {
            //* delete image from local storage
            $storage->delete($path);
            //* delete image from database
            $gallery->delete();
        }

        return back();
    }
}
