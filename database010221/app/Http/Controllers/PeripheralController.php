<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Peripheral;

class PeripheralController extends Controller
{
    public function index() {

     $peripherals = Peripheral::all();

     return view('pages.peripheral',compact('peripherals'));

    }

    public function show($id) {

     $peripheral = Peripheral::findOrFail($id);

     return view('pages.peripheral2',compact('peripheral'));

    }
}
