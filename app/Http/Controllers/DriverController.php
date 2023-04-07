<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(){
        return view('drivers.index');
    }

    public function createDriver(Request $request){

        $request->validate([
            'driver_name' => 'required',
            'address' => 'required',
            'age' => 'required',
        ]);

        Driver::create($request->all());
        return redirect()->route('drivers.index')->with('success','driver created successfully');
    }
}
