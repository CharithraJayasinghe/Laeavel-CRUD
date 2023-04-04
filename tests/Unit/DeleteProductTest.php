<?php

namespace Tests\Unit;

use App\Http\Controllers\ProductController;
use App\Models\product;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteProductTest extends TestCase{
    use RefreshDatabase;
    public function testDestroy(){

        //$user = User::factory()->create();
        $product = Product::factory()->create();

        $this->assertDatabaseCount("products",1);
        //dd(product::all());

        $response = $this->delete(route('products.destroy', $product));
        $this->assertDatabaseCount("products",0);
        $this->assertDeleted($product);

        $response->assertRedirect(route('products.index'));
        $response->assertSessionHas('success', 'product deleted successfully');

    }

    private function assertDeleted(\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection $product)
    {
    }


}
