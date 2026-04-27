<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoyatylevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loyaltyLevels = LoyaltyLevel::all();
        return response()->json([
            "data" => $loyaltyLevels,
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
        $loyaltyLevel = LoyaltyLevel::validate([
            'name' => '$request->name',
            'min_points' => '$request->min_points',
            'discount_percentage' => '$request->discount_percentage',
            'free_extra_hours' => '$request->free_extra_hours',
        ]);
        return response()->json([
            "data" => $loyaltyLevel,
            "status" => "success"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $loyaltyLevel = LoyaltyLevel::find($id);
        if (!$loyaltyLevel) {
            return response()->json([
                "message" => "Loyalty level not found",
                "status" => "error"
            ], 404);
        }
        return response()->json([
            "data" => $loyaltyLevel,
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
        $loyaltyLevel = LoyaltyLevel::find($id);
        if (!$loyaltyLevel) {
            return response()->json([
                "message" => "Loyalty level not found",
                "status" => "error"
            ], 404);
        }
        $loyaltyLevel->delete();
        return response()->json([
            "message" => "Loyalty level deleted successfully",
            "status" => "success"
        ]);
    }
}
