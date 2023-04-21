<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function addItem()
    {
        Cart::create([
            'product_id' => request('product_id'),
            'quantity'=> request('quantity'),
        ]);
    }

}
