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
        $product_id = 19;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "cover_1" => "assets/images/products/{$product_id}-c1.jpg",
            "cover_2" => "assets/images/products/{$product_id}-c2.jpg",
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "It’s always a celebration when you’re calling the shots! This tray is the life of the party and houses your drinks in style. An ergonomic piece of barware for a night your guests will never forget.",
            "slider_text" => "A spin on hosting experiences",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "A Shot of Brilliance",
            "content_text" => "The design is engineered to resemble a ballerina’s foot, providing this unique piece of barware absolute agility and frictionless movement.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "34 cm",
            "width" => "27.8 cm",
            "height" => "3.5 cm",
            "capacity" => "30 ml (per glass)"
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
