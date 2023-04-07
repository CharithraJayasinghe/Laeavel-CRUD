<?php

namespace Tests\Unit;

use App\Models\Car;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DemoTest extends TestCase
{
    use RefreshDatabase;
    public function  test_car_can_add_to_garage()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/cars',[
            'model' => 'prius',
            'make' => 'toyota',
            //data to the '/cars' endpoint
        ]);

        $response->assertOk();
        $response->assertStatus(200);
        $this->assertCount(1,Car::all());
    }


}
