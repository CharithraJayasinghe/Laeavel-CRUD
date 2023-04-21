<?php

namespace Tests\Unit;

use App\Models\Cart;
use App\Models\product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CartTest extends TestCase
{    use RefreshDatabase;
    public function testAddItem()
    {   $this->withoutExceptionHandling();
        // Create a new product using the factory
        $product = product::factory()->create();
     //   $cart = cart::factory()->create(['product_id'=>$product->id],);

        // Send a request to add the product to the cart
        $response = $this->post('/cart/add', [
            'product_id' => $product->id,
            'quantity' => 2,
        ]);

        // Assert that the response is successful
        $response->assertStatus(200);

        // Assert that the cart has one item with the correct product and quantity
        $this->assertCount(1, Cart::all());

        //retrieves the first record in the database table
        $cartItem = Cart::first();

        $this->assertEquals(1, $cartItem->product_id);


        $this->assertEquals(2, $cartItem->quantity);
    }


}
