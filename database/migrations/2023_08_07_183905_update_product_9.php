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
        $product_id = 9;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "cover_1" => "assets/images/products/{$product_id}-c1.jpg",
            "cover_2" => "assets/images/products/{$product_id}-c2.jpg",
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Strong coffee needs strong companions. Strengthened with extreme heat the mugs are perfected with a metal-meets-stone finish. The ergonomics in design manifests through the easy-to-pick handle.",
            "slider_text" => "I’d Love A Cup-le More",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Tempered for Durability",
            "content_text" => "Heated to high temperatures for durability, this glazed stoneware is moulded into our coffee mugs. Their broad bottom and narrow top give them a light-weight appearance. The round handle encourages a better grip.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "7 cm",
            "width" => "7 cm",
            "height" => "9.6 cm",
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
