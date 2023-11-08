<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('admin.vehicles.cars.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.vehicles.cars.add');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'license_plate' => 'required',
            'VIN' => 'required',
            'manufacture_date' => 'required',
            'color' => 'required',
            'fuel_type' => 'required',
            'fuel_capacity' => 'required',
            'mileage' => 'required',
            'daily_cost' => 'required',
            'status' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate and restrict image files

            'failed_at' => 'nullable|date',
        ]);

        Car::create($data);

        return redirect()->route('cars.index');
    }

    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $data = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'license_plate' => 'required',
            'VIN' => 'required',
            'manufacture_date' => 'required',
            'color' => 'required',
            'fuel_type' => 'required',
            'fuel_capacity' => 'required',
            'mileage' => 'required',
            'daily_cost' => 'required',
            'status' => 'required',
            'failed_at' => 'nullable|date',
        ]);

        $car->update($data);

        return redirect()->route('cars.index');
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index');
    }
}
