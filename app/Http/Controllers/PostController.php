<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('Post.post', compact('posts'));
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
        //* responsible for storing data coming from a form 



        //* data validation
        $request->validate([
            "author_name" => "required|string",
            "post_title" => "required|string",
            "post_description" => "required|string"
        ]);

       

        //* data store 

        Post::create([
            "author_name" => $request->author_name,
            "post_title" => $request->post_title,
            "post_description" => $request->post_description
        ]);


        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('Post.showPost', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function storeComment(Request $request){
        dd($request->all());
        $request->validate([
            "comment" => "required",
            "post_id" => "required"
        ]);


        Comment::create([
            "comment" => $request->comment,
            "post_id" => $request->post_id
        ]);
        return back();
    }
}
