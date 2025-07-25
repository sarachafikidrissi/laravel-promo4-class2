<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //* view to display all products
        //* DB::all() ==> retireves all data in DB table
        $products = Product::all(); 
        return view('Product.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //* form to create products
        return view('Product.partials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //* to store porudcts data coming from form in the database

        
        //^ validate form
        
        $request-> validate([
            "name" => "required|string|max:20",
            "price" => "required|integer",
            "stock" => "required|integer",
            "sizes" => "required",
            "description" => "required|max:250"
        ]);
        
        //^ Create 

        Product::create([
            "name" => $request->name,
            "price" => $request->price,
            "stock" => $request->stock,
            "sizes" => $request->sizes,
            "description" => $request->description
        ]);
        

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('Product.partials.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return view('Product.partials.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //

        $request-> validate([
            "name" => "required|string|max:20",
            "price" => "required|integer",
            "stock" => "required|integer",
            "sizes" => "required",
            "description" => "required|max:250"
        ]);


        $product->update([
            "name" => $request->name,
            "price" => $request->price,
            "stock" => $request->stock,
            "sizes" => $request->sizes,
            "description" => $request->description
        ]);

        return redirect()->route('product.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //* to delete a specific row from database

        $product->delete();

        return back();
    }
}
