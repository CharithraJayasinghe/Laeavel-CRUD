<?php

namespace App\Repositories;

interface CartRepository
{
    public function addItem($productId, $quantity);
    public function removeItem($itemId);
    public function updateItemQuantity($itemId, $quantity);
    public function getItems();
}
