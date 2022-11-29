<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Driver;
use App\Models\CarDriver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Requests\RegisterCarRequest;

class CarController extends Controller
{
  public function list()
  {
    $cars = Car::all();
    return view('cars', compact('cars'));
  }

  public function one(Request $request, string $id)
  {
    $car = Car::with('drivers')->find($id);
    return view("single-car", compact('car'));
  }

  public function create()
  {
    $drivers = Driver::all();
    return view('car', compact('drivers'));
  }

  public function store(RegisterCarRequest $request)
  {
    $car = Car::create($request->except('driver_id'));
    $car->drivers()->attach($request->input('driver_id'));

    return redirect(URL::route('driver.single', ['id' => $car->id]));
  }
}
