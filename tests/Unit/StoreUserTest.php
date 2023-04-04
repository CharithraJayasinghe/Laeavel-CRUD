<?php

namespace Tests\Unit;


use App\Models\product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StoreUserTest extends TestCase
{
    use RefreshDatabase;
    public function testStore(){
       //config(["app.env"=>"testing"]);

        $product = Product::factory()->create();


        $response = $this->post('/products', $product);
   //   $response->dd();
        $response->assertStatus(302);
        $response->assertSessionHas('success');


        $this->assertDatabaseHas('products', $product);


    }


}

