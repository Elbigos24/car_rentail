<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::with(['rental'])->get();
        return response()->json([
            "data" => $payments,
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
        $payment = Payment::validate([
            'rental_id' => $request->rental_id,
            'amount' => $request->amount,
            'payment_date' => $request->payment_date,
            'payment_method' => $request->payment_method,
            'status' => $request->status,
        ]);
        $payment=new Payment();
        $payment->rental_id=$request->rental_id;
        $payment->amount=$request->amount;
        $payment->payment_date=$request->payment_date;
        $payment->payment_method=$request->payment_method;
        $payment->status=$request->status;
        $payment->save();
        return response()->json([
            "data" => $payment,
            "status" => "success"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = Payment::with(['rental'])->find($id);
        if (!$payment) {
            return response()->json([
                "message" => "Payment not found",
                "status" => "error"
            ], 404);   
        }
        return response()->json([
            "data" => $payment,
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
        $payment = Payment::find($id);
        if (!$payment) {
            return response()->json([
                "message" => "Payment not found",
                "status" => "error"
            ], 404);   
        }
        $payment->delete();
        return response()->json([
            "message" => "Payment deleted successfully",
            "status" => "success"
        ]);

    }
}
