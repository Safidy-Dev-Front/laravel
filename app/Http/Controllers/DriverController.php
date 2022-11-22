<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
  public function __construct()
  {
    $this->DRIVERS = [
      [
        "id"          => 1,
        "name"        => "Jean Philipe",
        "licence"     => ['A', 'B', 'D'],
        "age"         => 32,
        "experiences" => 10
      ],
      [
        "id" => 2,
        "name" => "John Doe",
        "licence" => ['C', 'B', 'E'],
        "age" => 23,
        "experiences" => 2
      ],
      [
        "id" => 3,
        "name" => "Ry Enjana",
        "licence" => ['D', 'C', 'B'],
        "age" => 45,
        "experiences" => 20
      ],
    ];
  }
  public function list()
  {
    return view('drivers', [
      'drivers' => $this->DRIVERS
    ]);
  }

  public function one(Request $request, string $id)
  {
    $id = (int) $id;
    $driver = [];
    foreach ($this->DRIVERS as $item) {
      if ($item['id'] === $id) {
        $driver = $item;
      }
    }
    return view("single-driver", [
      "driver" => $driver
    ]);
  }
}
