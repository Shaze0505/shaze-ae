<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $product_id = 2;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Great coffee is the rocket fuel you need to get through a high-powered day. And, The Caffeinator propels you into the future. This intuitively designed coffee maker steals the limelight at your coffee bar.",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "slider_text" => "To Dirty Coffees That Make Doppio Days",
            "content_header" => "Words Cannot Espresso",
            "content_text" => "Borosilicate glass can defy temperature from 10 to 100 ° Celsius without cracking. It is moulded for ease of collecting and pouring your brew. The ribbed neck affords a stronger grip as it settles back into an aluminium stand with its sturdy podium and laser-cut base. We’re talking algorithmic precision. We haven’t forgotten the stainless steel coaster to catch stray droplets.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "15.5 cm",
            "width" => "11 cm",
            "height" => "30.3 cm",
            "capacity" => "650 ml"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
