<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = Driver::with(['order'])->get();
        return response()->json([
            "data" => $drivers,
            "status" => "success"
        ]);
        $drivers = Driver::with(['user'])->get();
        return response()->json([
            "data" => $drivers,
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
        $driver = Driver::validate([
            'order_id' => '$request->order_id',
            'user_id' => '$request->user_id',
            'licence_number' => '$request->licence_number',
            'img' => '$request->img',
        ]);
        
        $driver=new Driver();
        $driver->order_id=$request->order_id;
        $driver->user_id=$request->user_id; 
        $driver->licence_number=$request->licence_number;
        $driver->img=$request->img;
        $driver->save();
        return response()->json([
            "data" => $driver,
            "status" => "success"
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $driver = Driver::find($id);
        if (!$driver) {
            return response()->json([
                "message" => "Driver not found",
                "status" => "error"
            ], 404);
        }
        return response()->json([
            "data" => $driver,
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
        $driver = Driver::find($id);
        if (!$driver) {
            return response()->json([
                "message" => "Driver not found",
                "status" => "error"
            ], 404);
        }
        $driver->delete();
        return response()->json([
            "message" => "Driver deleted successfully",
            "status" => "success"
        ]);
    }
}
