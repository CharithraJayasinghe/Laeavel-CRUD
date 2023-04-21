<?php

namespace App\Repositories;
use Illuminate\Support\Facades\Session;
class CartSessionRepository implements CartRepository
{
    public function addItem($productId, $quantity)
    {
        $cart = Session::get('cart', []);
        $cart[] = [
            'product_id' => $productId,
            'quantity' => $quantity
        ];
        Session::put('cart', $cart);
    }

    public function removeItem($itemId)
    {
        $cart = Session::get('cart', []);
        unset($cart[$itemId]);
        Session::put('cart', $cart);
    }
    public function updateItemQuantity($itemId, $quantity)
    {
        $cart = Session::get('cart', []);
        $cart[$itemId]['quantity'] = $quantity;
        Session::put('cart', $cart);
    }

    public function getItems()
    {
        return Session::get('cart', []);
    }
}

