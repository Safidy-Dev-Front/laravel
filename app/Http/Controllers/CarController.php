<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function list()
    {
        return view('cars', [
            "cars" => array(
                [
                    "name" => "i30",
                    "benchmark" => "Hyundai",
                    "year" => 2015,
                    "color" => "white"
                ],
                [
                    "name" => "tiguan",
                    "benchmark" => "volkswagen",
                    "year" => 2011,
                    "color" => "white"
                ],
                [
                    "name" => "aircross 5",
                    "benchmark" => "citroen",
                    "year" => 2022,
                    "color" => "black"
                ]
            ),
            "message" => "Lorem ipsum"
        ]);
    }
}
