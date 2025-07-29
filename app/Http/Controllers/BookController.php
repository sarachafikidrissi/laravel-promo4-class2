<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Book.index');
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
            "name" => "required",
            "category_id" => "required",
            "author_id" => "required",
            "cover" => "required"
        ]);
        
        
        $path = $request->file('cover')->store('books', 'public');

        Book::create([
            "name" => $request->name,
            "category_id" => $request->category_id,
            "author_id" => $request->author_id,
            "cover" => $path
        ]);

        flash()->success("book added successfully!");
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
