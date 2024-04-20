<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $search = request()->query('search');

        if ($search) {
            $cars = Car::whereRelation('brand', 'name', 'like', "%$search%")
                ->orWhere('name', 'like', "%$search%")
                ->get();
        } else {
            $cars = Car::all();
        }

        return view('cars.index', compact('cars'));
    }

    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }
}
