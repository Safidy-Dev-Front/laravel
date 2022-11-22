<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterCarRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CarController extends Controller
{
  public function __construct() {
    $this->CARS = array(
      [
        "id" => 1,
        "name" => "i30",
        "benchmark" => "Hyundai",
        "year" => 2015,
        "color" => "white",
        "description" => "lorem ipsum dolor sit amet"
      ],
      [
        "id" => 2,
        "name" => "tiguan",
        "benchmark" => "volkswagen",
        "year" => 2011,
        "color" => "white",
        "description" => "lorem ipsum dolor sit amet"
      ],
      [
        "id" => 3,
        "name" => "aircross 5",
        "benchmark" => "citroen",
        "year" => 2022,
        "color" => "black",
        "description" => "lorem ipsum dolor sit amet"
      ]
    );
  }

  public function list()
  {
    return view('cars', [
      "cars" => $this->CARS,
      "message" => "Lorem ipsum"
    ]);
  }

  public function one(Request $request)
  {
    $id = (int) $request->query("id");

    foreach ($this->CARS as $item) {
      if($item['id'] === $id) {
        $car = $item;
      }
    }

    return view("single-car", [
      "car" => $car
    ]);
  }

  public function new()
  {
    return view('car-new');
  }

  public function store(RegisterCarRequest $request)
  {
    return $request->input();
  }
}
