<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderStatus;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function wishlist()
    {
        $wishlist = $_COOKIE["wishlist"] ?? "";
        $list = is_string($wishlist) && strlen($wishlist) > 0 ? explode(",", $wishlist) : [];
        $products = Product::whereIn("id", $list)->get();
        return view("web.checkout.wishlist", [
            "products" => $products
        ]);
    }

    public function getCartProducts(): array
    {
        $subtotal = 0;
        $discount = 0;
        $total_discount = 0;
        $total_coupon_discount = 0;
        $total_item_discount = 0;

        $tax_percentage = Order::TAX;
        $delivery = Order::DELIVERY;

        if (request()->has("type") && request()->get("type") == "buyNow"){
            $product = Product::find(request()->get("product"));
            $quantity = (int) request()->get("quantity");
            if ($product){
                if ($quantity < 1) {
                    $quantity = 1;
                }
                $product->quantity = $quantity;
                $subtotal = $product->price * $product->quantity;
                $tax = round($subtotal * $tax_percentage / 100, 2);
                $total = round($subtotal + $tax + $delivery, 2);
                return [
                    "products" => [$product],
                    "subtotal" => $subtotal,
                    "total" => $total,
                    "discount" => $discount,
                    "delivery" => $delivery,
                    "tax" => $tax,
                    "tax_percentage" => $tax_percentage,
                    "total_discount" => $total_discount,
                    "total_coupon_discount" => $total_coupon_discount,
                    "total_item_discount" => $total_item_discount,
                ];
            }
        }
        $cart = $_COOKIE["cart"] ?? [];
        if ($cart && is_string($cart) && strlen($cart) > 2){
            $cart = json_decode($cart, true);
        }else{
            $cart = [];
        }

        foreach ($cart as $key => $item){
            $cart[(int)$key] = (int)$item;
        }
        $products = Product::whereIn("id", array_keys($cart))->get();

        foreach ($products as $product){
            $product->quantity = $cart[$product->id] ?? 1;
            $subtotal += ($product->price * $product->quantity);
        }

        $tax = round($subtotal * $tax_percentage / 100, 2);
        $total = round($subtotal + $tax + $delivery, 2);
        return [
            "products" => $products,
            "subtotal" => $subtotal,
            "total" => $total,
            "discount" => $discount,
            "delivery" => $delivery,
            "tax" => $tax,
            "tax_percentage" => $tax_percentage,
            "total_discount" => $total_discount,
            "total_coupon_discount" => $total_coupon_discount,
            "total_item_discount" => $total_item_discount,
        ];
    }

    public function cart(){
        $cart = $this->getCartProducts();
        return view("web.checkout.cart", [
            "products" => $cart["products"],
            "total" => $cart["total"],
            "discount" => $cart["discount"],
        ]);
    }

    public function checkout(Request $request){
        $user = Auth::user();
        $cart = $this->getCartProducts();
        $type = $request->get("type");
        $product_id = $request->get("product");
        $quantity = $request->get("quantity");
        return view("web.checkout.checkout", [
            "products" => $cart["products"],
            "total" => $cart["total"],
            "discount" => $cart["discount"],
            "user" => $user,

            "type" => $type,
            "product_id" => $product_id,
            "quantity" => $quantity,
        ]);
    }

    public function payment(){
        $cart = $this->getCartProducts();
        return response(view("web.checkout.payment", [
            "products" => $cart["products"],
            "total" => $cart["total"],
            "discount" => $cart["discount"],
        ]));
    }

    public function purchase(Request $request){
        $cart = $this->getCartProducts();
        $payment_type = $request->get("payment_method");

        if ($request->get("details") && is_string($request->get("details")) && strlen($request->get("details")) > 2){
            $details = json_decode($request->get("details"), true);
        }else{
            $details = [];
        }

        $name = $details["name"] ?? null;
        $surname = $details["surname"] ?? null;
        $email = $details["email"] ?? null;
        $phone = $details["phone"] ?? null;
        $address = $details["address"] ?? null;
        $address2 = $details["address2"] ?? null;
        $area = $details["area"] ?? null;
        $state = $details["state"] ?? null;
        $country = $details["country"] ?? null;

        if (!$name && $surname){
            return redirect()->back()->withErrors("Consignee fields are not filled.");
        }

        if ($payment_type == Order::PAYMENT_COD){
            $status = Status::STATUS_NEW;
        }
//        else ($payment_type == Order::PAYMENT_ONLINE){
        else{
            $status = Status::STATUS_UNPAID;
        }

        $order = Order::create([
            "user_id" => Auth::id() ?? null,

            "name" => $name,
            "surname" => $surname,
            "phone" => $phone,
            "email" => $email,

            "address" => $address,
            "address2" => $address2,
            "area" => $area,
            "state" => $state,
            "country" => $country,

            "status_id" => $status,
            "payment_type" => $payment_type,

            "subtotal" => round($cart["subtotal"], 2),
            "shipment_price" => round($cart["delivery"]),
            "total_tax" => round($cart["tax"], 2),
            "total_discount" => round($cart["total_discount"], 2),
            "total_coupon_discount" => round($cart["total_coupon_discount"], 2),
            "total_item_discount" => round($cart["total_item_discount"], 2),
            "total_price" => round($cart["total"], 2),
        ]);

        $stripe_products = [];
        foreach ($cart["products"] as $product){
            OrderProduct::create([
                "order_id" => $order->id,
                "product_id" => $product->id,
                "quantity" => $product->quantity,
                "sold_price" => round($product->selling_price, 2),
                "actual_price" => round($product->price, 2),
                "discounted_amount" => round($product->discount_difference_amount, 2),
            ]);
            $stripe_products[] = [
                'price_data' => [
                    'currency' => 'aed',
                    'unit_amount' => round($product->selling_price * 100),
                    'product_data' => [
                        'name' => $product->name,
                    ],
                ],
                'quantity' => $product->quantity,
            ];
        }

        OrderStatus::create([
            "order_id" => $order->id,
            "status_id" => $status,
            "details" => null,
        ]);

        if ($payment_type == Order::PAYMENT_COD){
            return redirect()->route("complete", ["order" => $order->id]);
        }

        $order->refresh();
        $payload = [
            "line_items" => $stripe_products,
            "client_reference_id" => $order->id,
            "currency" => "aed",
            "customer_email" => $order->email,
            "mode" => "payment",
            "success_url" => route("online", ["order_id" => $order->id, "result" => "success"]),
            "cancel_url" => route("online", ["order_id" => $order->id, "result" => "fail"]),
            "automatic_tax" => [
                "enabled" => false,
            ],
            "shipping_options" => [
                [
                    "shipping_rate_data" => [
                        "type" => 'fixed_amount',
                        "fixed_amount" => [
                            "amount" => 0,
                            "currency" => 'aed',
                        ],
                        "display_name" => 'Standard delivery'
                    ],
                ],
            ],
        ];
        try {
            \Stripe\Stripe::setApiKey(env("STRIPE_SECRET_KEY"));
            $checkout_session = \Stripe\Checkout\Session::create($payload);
            $payment = Payment::create([
                "user_id" => $order->user_id,
                "order_id" => $order->id,
                "payment_id" => $checkout_session->id,
                "amount" => $order->total_price,
                "session_payload" => $payload,
                "session_response" => $checkout_session,
                "status" => Payment::STATUS_PENDING,
            ]);

            $order->update([
                "payment_id" => $payment->id,
            ]);
            return redirect($checkout_session->url, 302, [
                "Content-Type" => "application/json"
            ]);
        }
        catch (\Exception $e){
            Log::error($e);
            return redirect()->route("online", ["order_id" => $order->id, "payment" => "fail"]);
        }
    }

    public function online($order_id, $result){
        $order = Order::find($order_id);
        $payment = Payment::find($order->payment_id);

        $error_message = null;
        try {
            \Stripe\Stripe::setApiKey(env("STRIPE_SECRET_KEY"));
            $checkout = \Stripe\Checkout\Session::retrieve( $payment->payment_id ?? null);

            if ($checkout->payment_status == "paid"){
                $payment->update([
                    "note" => null,
                    "status" => Payment::STATUS_SUCCESS,
                ]);
                $order->update([
                    "status_id" => Status::STATUS_NEW,
                ]);
                if ($order->status_id != Status::STATUS_NEW){
                    OrderStatus::create([
                        "order_id" => $order->id,
                        "status_id" => Status::STATUS_NEW,
                        "details" => null,
                    ]);
                }
                return response(view("web.checkout.complete", [
                    "success" => true,
                    "order" => $order,
                    "message" => "Payment is successfully done."
                ]))->cookie("cart", null, time()-3600)->cookie("checkoutDetails", null, time()-3600);
            }
        }
        catch (\Exception $e){
            Log::error($e);
            $error_message = $e->getMessage();
        }
        if ($payment){
            $payment->update([
                "note" => $error_message,
                "status" => Payment::STATUS_FAILED,
            ]);
        }
        if ($order && $order->status_id != Status::STATUS_PAYMENT_FAILED){
            $order->update([
                "status_id" => Status::STATUS_PAYMENT_FAILED,
            ]);
            OrderStatus::create([
                "order_id" => $order->id,
                "status_id" => Status::STATUS_PAYMENT_FAILED,
                "details" => $error_message,
            ]);
        }
        return response(view("web.checkout.complete", [
            "success" => false,
            "order" => $order,
            "message" => "Something went wrong with payment. Please, contact to customer service for further information."
        ]))->cookie("cart", null, time()-3600)->cookie("checkoutDetails", null, time()-3600);
    }

    public function complete(Request $request){
        $order = Order::find($request->get("order"));
        return response(view("web.checkout.complete", [
            "success" => true,
            "order" => $order,
            "message" => "We will deliver your order soon."
        ]))->cookie("cart", null, time()-3600)->cookie("checkoutDetails", null, time()-3600);
    }
}
