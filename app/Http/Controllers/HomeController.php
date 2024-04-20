<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Feedback;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $cars = Car::limit(4)->get();
        $feedbacks = Feedback::limit(6)->get();

        return view('homepage', compact('cars', 'feedbacks'));
    }
}
