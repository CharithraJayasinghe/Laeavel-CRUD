<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(4);

        return view('products.index', compact('products'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

        //create a new product in the database
        Product::create($request->all());

        //redirect the user and send message
        return redirect()->route('products.index')->with('success','product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
       //validate the input
        $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

        //create a new product in the database
        $product->update($request->all());

        //redirect the user and send message
        return redirect()->route('products.index')->with('success','product update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'product deleted successfully');
    }

    public function login(product $product)
    {
        return view('products.login');
    }


}
