<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::where("user_id", request()->user()->id)
            ->orWhere("email", request()->user()->email)
            ->orderByDesc("id")
            ->get();
        return view("web.orders.index", [
            "orders" => $orders
        ]);
    }
}
