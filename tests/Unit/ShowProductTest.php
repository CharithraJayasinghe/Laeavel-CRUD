<?php

namespace Tests\Unit;

use App\Models\product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowProductTest extends TestCase
{
    use RefreshDatabase;
    public function testShowProject(){

        $product = Product::factory()->create();

        $this->assertDatabaseCount('products', 1);
        //dd(product::all());


        //$response = $this->get(route('products.show', $product->id));

                //above and below codes are for same purpose

       $response = $this->get('/products/'.$product->id);

        $response->assertStatus(200);
        $response->assertViewIs("products.show");
        $response->assertViewHas("product" , $product);







    }
}
