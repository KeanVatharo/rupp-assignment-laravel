<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CarBrand;
use Illuminate\Support\Facades\Storage;

class AdminCarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        $carBrands = CarBrand::select(['id', 'name'])->get();

        return view('admin.cars.create', compact('carBrands'));
    }

    public function edit(Car $car)
    {
        $carBrands = CarBrand::select(['id', 'name'])->get();

        return view('admin.cars.edit', compact('car', 'carBrands'));
    }

    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'car_brand_id' => ['required', 'integer'],
            'name' => ['required'],
            'year' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image_url')) {
            // Delete old image if exists
            if ($car->image_url) {
                Storage::disk('public')->delete($car->image_url);
            }

            // Store new image
            $imagePath = $request->file('image_url')->store('cars', 'public');
            $car->image_url = $imagePath;
        }

        $car->update([
            'name' => $validated['name'],
            'car_brand_id' => $validated['car_brand_id'],
            'year' => $validated['year'],
            'price' => $validated['price'],
            'description' => $validated['description'],
            'image_url' => $imagePath,
        ]);

        return redirect()->route('admin.cars.index')->withMessage('Updated success!');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'car_brand_id' => ['required', 'integer'],
            'name' => ['required'],
            'year' => ['required', 'integer'],
            'price' => ['required', 'integer'],
            'description' => ['required'],
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image_url')) {
            // Store image
            $imagePath = $request->file('image_url')->store('cars', 'public');
        }

        Car::create([
            'name' => $validated['name'],
            'car_brand_id' => $validated['car_brand_id'],
            'year' => $validated['year'],
            'price' => $validated['price'],
            'description' => $validated['description'],
            'image_url' => $imagePath,
        ]);

        return redirect()->route('admin.cars.index')->withMessage('Created success!');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('admin.cars.index')->withMessage('Deleted success!');
    }
}
