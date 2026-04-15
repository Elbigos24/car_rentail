<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with(['user'])->get();
        return response()->json([
            "data" => $users,
            "status" => "success"
        ]);
        $users = User::with(['car'])->get();
        return response()->json([
            "data" => $users,
            "status" => "success"
        ]);

        $users = User::with(['driver'])->get();
        return response()->json([
            "data" => $users,
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
        $rentail = Rentail::validate([
            'user_id' => '$request->user_id',
            'car_id' => '$request->car_id',
            'driver_id' => '$request->driver_id',
            'pickup_date' => '$request->pickup_date',
            'return_date' => '$request->return_date',
            'total_amount' => '$request->total_amount',
            'status' => '$request->status',
        ]);
        $rentail=new Rentail();
        $rentail->user_id=$request->user_id;
        $rentail->car_id=$request->car_id;
        $rentail->driver_id=$request->driver_id;
        $rentail->pickup_date=$request->pickup_date;
        $rentail->return_date=$request->return_date;
        $rentail->total_amount=$request->total_amount;
        $rentail->status=$request->status;
        $rentail->save();

        return response()->json([
            "data" => $rentail,
            "status" => "success"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rentail = Rentail::find($id);
        if (!$rentail) {
            return response()->json([
                "message" => "Rentail not found",
                "status" => "error"
            ], 404);
        }
        return response()->json([
            "data" => $rentail,
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
        $rentail = Rentail::find($id);
        if (!$rentail) {
            return response()->json([
                "message" => "Rentail not found",
                "status" => "error"
            ], 404);
        }
        $rentail->delete();
        return response()->json([
            "message" => "Rentail deleted successfully",
            "status" => "success"
        ]);
    }
}
