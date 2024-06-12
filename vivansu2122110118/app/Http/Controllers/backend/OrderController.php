<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Order::where('order.status', '!=', 0)->orderBy('order.created_at', 'desc')
            ->join('user', 'user.id', '=', 'order.user_id')
            ->get();

        return view('backend.order.index', compact('list'));
    }

    public function create()
    {
        return view('backend.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $order = new Order();
        $order->user_id = $validatedData['username'];
        $order->name = $validatedData['delivery_name'];
        $order->gender = $validatedData['delivery_gender'];
        $order->email = $validatedData['delivery_email'];
        $order->phone = $validatedData['delivery_phone'];
        $order->address = $validatedData['delivery_address'];
        $order->note = $validatedData['note'];
        $order->status = $validatedData['status'];
        $order->save();

        // Chuyển hướng người dùng đến trang cần sau khi lưu thành công
        return redirect()->route('admin.order.index')->with('success', 'Order created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    public function status(string $id)
    {
        //
    }
}
