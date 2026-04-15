<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::with(['brand'])->get();
        return response()->json([
            "data" => $cars,
            "status" => "success"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = Car::validate([
            'brand_id' => '$request->brand_id',
            'models' => '$request->models',
            'year' => '$request->year',
            'color' => '$request->color',
            'licence_plate' => '$request->licence_plate',
            'mileage' => '$request->mileage',
            'lat' => '$request->lat',
            'lng' => '$request->lng',
            'Is_premium' => '$request->Is_premium',
            'rental_count' => '$request->rental_count',
            'daly_rate' => '$request->daly_rate',
            'status' => '$request->status',
        ]);
        return response()->json([
            "data" => $car,
            "status" => "success"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::find($id);
        if (!$car) {
            return response()->json([
                "message" => "Car not found",
                "status" => "error"
            ], 404);
        }
        return response()->json([
            "data" => $car,
            "status" => "success"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::find($id);
        if (!$car) {
            return response()->json([
                "message" => "Car not found",
                "status" => "error"
            ], 404);
        }
        $car->delete();
        return response()->json([
            "message" => "Car deleted successfully",
            "status" => "success"
        ]);
    }
}
