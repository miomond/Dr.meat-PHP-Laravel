<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $cartData = $request->input('cart_data');
        $shipmentCost = $request->input('shipment_cost');

        // Validate the cart data and the shipment cost.

        // Create a new order record in the orders table.
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'cart_data' => $cartData,
            'shipment_cost' => $shipmentCost,
            'total_cost' => $cartData['total'] + $shipmentCost,
            'status' => 'pending',
        ]);

        // Generate a voucher for the user.
        $voucher = new Voucher();
        $voucher->order_id = $order->id;
        $voucher->user_name = Auth::user()->name;
        $voucher->order_date = $order->created_at;
        $voucher->total_cost = $order->total_cost;
        $voucher->shipment_cost = $order->shipment_cost;
        $voucher->save();

        // Redirect the user to their profile.
        return redirect()->route('userProfile');
    }
    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }


}
