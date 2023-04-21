<?php

namespace App\Observers;

use App\Models\Cart;
use App\Repositories\CartRepository;
use App\Repositories\CartSessionRepository;

class CartObserver
{
    protected $cartRepository;

    public function __construct(CartSessionRepository $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function created(Cart $cart)
    {
        $this->cartRepository->addItem($cart->product_id, $cart->quantity);
    }

    public function updated(Cart $cart)
    {
        $this->cartRepository->updateItemQuantity($cart->id, $cart->quantity);
    }

    public function deleted(Cart $cart)
    {
        $this->cartRepository->removeItem($cart->id);
    }
}
