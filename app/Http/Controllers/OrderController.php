<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class OrderController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(StoreOrderRequest $request)
    {
        $sum = 100;

        $products = Product::query()->limit(2)->get();

        $address = UserAddress::find($request->address_id);

        auth()->user()->orders()->create([
            'delivery_method_id' => $request->delivery_method_id,
            'payment_type_id' => $request->payment_type_id,
            'comment' => $request->comment,
            'sum' => $sum,
            'products' => $products,
            'address'  => $address
        ]);

        return 'success';

    }


    public function show(Order $order)
    {
        //
    }


    public function edit(Order $order)
    {
        //
    }


    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}
