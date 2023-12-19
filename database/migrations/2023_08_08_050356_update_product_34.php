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
        $product_id = 34;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Designed to fringe your table and secure glasses, The Radial reflects the inherent sleekness in table set up. Grooved metal meets cork to find balance in design and at your table.  ",
            "slider_text" => "It’s all in the details and duality…",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "We’ve got all bases covered!",
            "content_text" => "Dramatizing the design is its mirror finish cast in stainless steel. Securing heat is the cork set in the center of the coaster to hold your drink.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "9.8 cm",
            "width" => "9.8 cm",
            "height" => "1.1 cm"
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
