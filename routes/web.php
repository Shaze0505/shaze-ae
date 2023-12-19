<?php

use Illuminate\Support\Facades\Route;

Route::get("/", [\App\Http\Controllers\HomeController::class, "index"])->name("index");
Route::get("experts", [\App\Http\Controllers\ExpertController::class, "index"])->name("experts");
Route::get("experts/{slug}", [\App\Http\Controllers\ExpertController::class, "show"])->name("experts.show");
Route::view("about", "web.about")->name("about");

Route::get("products", [\App\Http\Controllers\ProductController::class, "index"])->name("products");
Route::get("products/{product:slug}", [\App\Http\Controllers\ProductController::class, "show"])->name("products.show");
Route::get("products/search/{q?}", [\App\Http\Controllers\ProductController::class, "search"])->name("products.search");

Route::view("privacy", "web.privacy")->name("privacy");
Route::view("payment-policy", "web.payment-policy")->name("paymentPolicy");
Route::view("shipping-policy", "web.shipping-policy")->name("shippingPolicy");
Route::view("delight-policy", "web.delight-policy")->name("delightPolicy");

Route::get("wishlist", [\App\Http\Controllers\CheckoutController::class, "wishlist"])->name("wishlist");
Route::get("cart", [\App\Http\Controllers\CheckoutController::class, "cart"])->name("cart");
Route::get("checkout", [\App\Http\Controllers\CheckoutController::class, "checkout"])->name("checkout");
Route::get("checkout/payment", [\App\Http\Controllers\CheckoutController::class, "payment"])->name("payment");
Route::post("checkout/purchase", [\App\Http\Controllers\CheckoutController::class, "purchase"])->name("purchase");
Route::get("checkout/complete", [\App\Http\Controllers\CheckoutController::class, "complete"])->name("complete");
Route::get("checkout/online/{order_id}/{result}", [\App\Http\Controllers\CheckoutController::class, "online"])->name("online");

Route::middleware("auth")->group(function (){
    Route::get("profile", [\App\Http\Controllers\ProfileController::class, "index"])->name("profile.index");
    Route::get("profile/edit", [\App\Http\Controllers\ProfileController::class, "edit"])->name("profile.edit");
    Route::post("profile/update", [\App\Http\Controllers\ProfileController::class, "update"])->name("profile.update");

    Route::get("profile/orders", [\App\Http\Controllers\OrderController::class, "index"])->name("profile.orders.index");
    Route::get("profile/orders/{order}", [\App\Http\Controllers\OrderController::class, "show"])->name("profile.orders.show");

    Route::get("profile/addresses", [\App\Http\Controllers\AddressController::class, "index"])->name("profile.addresses.index");
    Route::get("profile/addresses/store", [\App\Http\Controllers\AddressController::class, "store"])->name("profile.addresses.store");
    Route::get("profile/addresses/update", [\App\Http\Controllers\AddressController::class, "update"])->name("profile.addresses.update");
    Route::get("profile/addresses/destroy", [\App\Http\Controllers\AddressController::class, "destroy"])->name("profile.addresses.destroy");
});
require __DIR__.'/auth.php';
