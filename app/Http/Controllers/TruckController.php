<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    public function index()
    {
        $trucks = Truck::all();
        return view('admin.vehicles.trucks.index', compact('trucks'));
    }

    public function create()
    {
        return view('admin.vehicles.trucks.add');
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
            'cargo_capacity' => 'required',
            'fuel_type' => 'required',
            'fuel_capacity' => 'required',
            'mileage' => 'required',
            'daily_cost' => 'required',
            'status' => 'required',
            'failed_at' => 'nullable|date',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate and restrict image files
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images/trucks');
            $data['image_path'] = $imagePath;
        }

        Truck::create($data);

        return redirect()->route('trucks.index');
    }

    public function edit(Truck $truck)
    {
        return view('trucks.edit', compact('truck'));
    }

    public function update(Request $request, Truck $truck)
    {
        $data = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'license_plate' => 'required',
            'VIN' => 'required',
            'manufacture_date' => 'required',
            'color' => 'required',
            'cargo_capacity' => 'required',
            'fuel_type' => 'required',
            'fuel_capacity' => 'required',
            'mileage' => 'required',
            'daily_cost' => 'required',
            'status' => 'required',
            'failed_at' => 'nullable|date',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate and restrict image files
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('images/trucks');
            $data['image_path'] = $imagePath;
        }

        $truck->update($data);

        return redirect()->route('trucks.index');
    }

    public function destroy(Truck $truck)
    {
        $truck->delete();

        return redirect()->route('trucks.index');
    }
}
