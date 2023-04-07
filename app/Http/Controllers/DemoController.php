<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function store(){


            Car::create([
                'model' => request('model'),
                'make'=> request('make'),
            ]);

    }
}
