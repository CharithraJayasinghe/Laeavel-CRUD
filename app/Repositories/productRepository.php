<?php

/*namespace App\Repositories;

class productRepository
{
    public function create(array $attributes){
        $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

        //create a new product in the database
        Product::create($request->all());

        //redirect the user and send message
        return redirect()->route('products.index')->with('success','product created successfully');
    }
}
