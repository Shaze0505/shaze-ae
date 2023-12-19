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
        $product_id = 14;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "cover_1" => "assets/images/products/{$product_id}-c1.jpg",
            "cover_2" => "assets/images/products/{$product_id}-c2.jpg",
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "When four mates get together over a drink, it’s only natural to lose track of time. Sometimes their glasses too, in all of the enjoyment. Unless of course, the glasses are distinct – part of a set and yet individual like the squad that drinks from them.",
            "slider_text" => "A Gold Standard Quartet For The Bar",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Crystal Gazing into the Good Times",
            "content_text" => "The crystal set comprises of two glasses and two goblets, each of which own distinctive shapes. Simply because inadvertently someone drinks the other’s lager when their own ale is the way to go.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "Goblet - 8.51 cm / Pilsner - 7.18 cm / Pint / 6.5 cm / Weiss - 6.6 cm",
            "width" => "Goblet - 8.51 cm / Pilsner - 7.18 cm / Pint - 6.5 cm / Weiss - 6.6 cm",
            "height" => "Goblet - 17.78 cm / Pilsner - 17.78 cm / Pint - 17.78 cm / Weiss - 17.78 cm",
            "capacity" => "Goblet - 450ml / Pilsner - 320ml / Pint - 310ml / Weiss - 550ml"
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
