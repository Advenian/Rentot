<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function index()
    {
        $bikes = Bike::all();
        return view('admin.vehicles.bikes.index', compact('bikes'));
    }

    public function create()
    {
        return view('admin.vehicles.bikes.add');
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
            'transmission' => 'required',
            'fuel_type' => 'required',
            'fuel_capacity' => 'required',
            'mileage' => 'required',
            'daily_cost' => 'required',
            'status' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate and restrict image files
            'failed_at' => 'nullable|date',
        ]);
        // return $data;

        Bike::create($data);

        return redirect()->route('bikes.index');
    }

    public function edit(Bike $bike)
    {
        return view('bikes.edit', compact('bike'));
    }

    public function update(Request $request, Bike $bike)
    {
        $data = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'license_plate' => 'required',
            'VIN' => 'required',
            'manufacture_date' => 'required',
            'color' => 'required',
            'transmission' => 'required',
            'fuel_type' => 'required',
            'fuel_capacity' => 'required',
            'mileage' => 'required',
            'daily_cost' => 'required',
            'status' => 'required',
            'failed_at' => 'nullable|date',
        ]);

        $bike->update($data);

        return redirect()->route('bikes.index');
    }

    public function destroy(Bike $bike)
    {
        $bike->delete();

        return redirect()->route('bikes.index');
    }
}
