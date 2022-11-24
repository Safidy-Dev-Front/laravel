<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegisterCarRequest;

class CarController extends Controller
{
  public function list()
  {
    $cars = DB::table('cars')->get()->toArray();
    return view('cars', [
      'cars'=>$cars
    ]);
  }

  public function one(Request $request, string $id)
  {
    $car = DB::table('cars')->where('id', '=' , $id )->get()->toArray();
    // $car_item = $car[0];
    dd($car);
    return view("single-car",[
      'car'=> $car
    ]);
  }

  public function new()
  {
    return view('car-new');
  }

  public function store(RegisterCarRequest $request)
  {
    dd($request);
    // DB::table('cars')->insert([
    //   'name'=>
    // ]);
  }
}
