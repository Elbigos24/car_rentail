<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with(['loyaltyLevel'])->get();
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
        $validated= $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:6",
            "loyalty_level_id" => "required|exists:loyalty_levels,id",
            "loyalty_points" => "required|integer|min:0",
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->loyalty_level_id=$request->loyalty_level_id;
        $user->loyalty_points=$request->loyalty_points;
        $user->save();
        return response()->json([
            "data" => $user,
            "status" => "success"
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::with(['loyaltyLevel'])->find($id);
        if (!$user) {
            return response()->json([
                "message" => "User not found",
                "status" => "error"
            ], 404);
        }
        return response()->json([
            "data" => $user,
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
         $validated= $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:6",
            "loyalty_level_id" => "required|exists:loyalty_levels,id",
            "loyalty_points" => "required|integer|min:0",
        ]);
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->loyalty_level_id=$request->loyalty_level_id;
        $user->loyalty_points=$request->loyalty_points;
        $user->save();
        return response()->json([
            "data" => $user,
            "status" => "success"
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json([
                "message" => "User not found",
                "status" => "error"
            ], 404);
        }
        $user->delete();
        return response()->json([
            "message" => "User deleted successfully",
            "status" => "success"
        ]);
    }
}
