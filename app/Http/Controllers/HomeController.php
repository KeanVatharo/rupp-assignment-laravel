<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $cars = Car::all();
        return view('homepage', compact('cars'));
    }
}
