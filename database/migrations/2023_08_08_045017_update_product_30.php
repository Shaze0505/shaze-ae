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
        $product_id = 30;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Eating gol-gappas is an event in itself. And you want that decadent morsel crumbling in your mouth, not your hands. Here’s a platter that serves your ‘chaat’ as you chat, mess-free.",
            "slider_text" => "Eating Panipuri Just Got A Delicious Spin",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "For A Glassy Affair",
            "content_text" => "The clarity of the borosilicate glass allows for a clear view of the sauces and puris. The trichoid shape of each bowl is unique to Shazé, facilitating ease in serving. The beaker has a wider base for sturdiness with a triangular mouth to help pour the sauces with ease, into the pre-filled puris.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "Gold Base 32 cm / Water Jug 4.62 cm / Large Bowl 12.26 cm / Small Bowl 6.31 cm / Spoon 18 cm",
            "width" => "Gold Base 15 cm / Water Jug 4.12 cm / Large Bowl 12.04 cm / Small Bowl 6.23 cm / Spoon 4.6 cm",
            "height" => "Gold Base 2.28 cm / Water Jug 8.08 cm / Large Bowl 4.59 cm / Small Bowl 2.33 cm / Spoon 1.09 cm",
            "capacity" => "Water Jug 120ml / Large Bowl 200ml / Small Bowl 20ml"
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
