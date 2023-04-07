<?php

namespace Tests\Unit;

use App\Models\Driver;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DriverTest extends TestCase
{
    use RefreshDatabase;
    public function testCreateDriver(){


        $driver = Driver::factory()->create();
        $driverData = $driver->toArray();

        $this->assertDatabaseCount('drivers', 1);




        //$response = $this->post('/drivers/',$driverData);
       //$response->assertStatus(200);





        //dd(Driver::all());

      //  $response->assertStatus(200);







    }
}
