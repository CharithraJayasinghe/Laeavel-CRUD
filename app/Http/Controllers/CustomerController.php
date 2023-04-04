<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
       // $products = Product::latest()->paginate(4);

        return view('customers.index');
    }

    //
}
