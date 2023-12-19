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
        $product_id = 3;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "A coffee connoisseur always gets the 'bloom’ pour right. For that skilfully made coffee with visual impact and consistency, we bring you a precision kettle. Its swan-like spout, temperature indicator, and ergonomically designed handle help your pour-over process achieve perfection.",
            "slider_text" => "Pour Like Never Before",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_1.jpg",
            "content_header" => "It’s Getting Hot in Here",
            "content_text" => "A stainless steel kettle that has its own food thermometer assists the temperature indicator on the gilded lid. It is housed within a PVD-coated, aluminium cage body and covered with an anodized, golden lid. The bakelite handle has a thumb grip for ease of carrying and pouring",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "15 cm",
            "width" => "11 cm",
            "height" => "30 cm",
            "capacity" => "780 ml"
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
