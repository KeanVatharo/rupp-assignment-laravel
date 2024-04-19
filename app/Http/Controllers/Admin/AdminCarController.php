<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view('admin.cars.create');
    }

    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'brand' => ['required'],
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
            'brand' => $validated['brand'],
            'name' => $validated['name'],
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
            'brand' => ['required'],
            'name' => ['required'],
            'year' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image_url')) {
            // Store image
            $imagePath = $request->file('image_url')->store('cars', 'public');
        }

        Car::create([
            'brand' => $validated['brand'],
            'name' => $validated['name'],
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
