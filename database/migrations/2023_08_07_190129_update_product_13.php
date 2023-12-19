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
        $product_id = 13;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "cover_1" => "assets/images/products/{$product_id}-c1.jpg",
            "cover_2" => "assets/images/products/{$product_id}-c2.jpg",
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "A true fit for the whisky alpha, these formidable glasses dominate the hosting game. The hand-cut pattern delights drinkers by creating a sublime play of light with the amber reflection from your bourbon.",
            "slider_text" => "Whisk-ey Your Guests into Magical Moments",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "It’s Crystal Clear",
            "content_text" => "The barely-there 2mm width of the glass allows you to savour a sip without interruption. Neither do drinks turn flat in the crystal. Hand-blown to create its sturdy base, these glasses own their presence at every whisky table.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "width" => "9 cm",
            "height" => "9.5 cm",
            "capacity" => "370 ml"
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
