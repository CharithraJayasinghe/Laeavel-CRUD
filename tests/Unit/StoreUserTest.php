<?php

namespace Tests\Unit;


use App\Models\product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StoreUserTest extends TestCase
{
    use RefreshDatabase;

    public function testStore()
    {
        $productData = [ // tests/Unit/StoreUserTest.php:18
            "name" => "Dr. Lavern Flatley Sr.",
            "details" => "Sit maiores praesentium sunt error officia eligendi .",
        ];
        $this->assertDatabaseCount('products', 0);
        $response = $this->post('/products/', $productData);

        $response->assertStatus(302);
        $response->assertSessionHas('success');

        $this->assertDatabaseCount('products', 1);

        $this->assertDatabaseHas('products', $productData);
        //check whether the product created in the test exists in the products table.


    }


}

