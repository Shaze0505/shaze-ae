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
        $product_id = 11;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "cover_1" => "assets/images/products/{$product_id}-c1.jpg",
            "cover_2" => "assets/images/products/{$product_id}-c2.jpg",
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Like knights in shining armors, these Espresso cups are a reflection of how you enjoy your coffee, strong and tasteful. Glazed to perfection and molded in stone, this set of 6 cups make are striking additions for your coffee-ware bar.",
            "slider_text" => "Good company and great conversation- Powered by caffeine!",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Pressed for Precision",
            "content_text" => "lazed stoneware forms the foundation, while an ergonomic round handle completes the cup, facilitating an easy lift with the hot brew within. The unique shape widens at the base and tapers to the top creating its futuristic façade.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "4 cm",
            "width" => "5 cm",
            "height" => "5 cm",
            "capacity" => "60 ml"
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
