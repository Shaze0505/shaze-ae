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
        $product_id = 24;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "From Daiquiris to Mai-tais, our shaker is an ergonomic bar tool that helps you create that signature mix for your guests. Its in-built strainer and two lids allows you to single-handedly mix an individual cocktail, sans leakage",
            "slider_text" => "Shake That Thing Shake It Up A Notch",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Put A Lid On It",
            "content_text" => "PVD coated stainless steel forms this brilliant piece of barware with its brush finish base and two high-gloss lids. The two lids ensure no leakage as you shake. The external, fin-like lid with its indentation looks nautical while facilitating the perfect grip to chat as you mix.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "7.3 cm",
            "width" => "7.3 cm",
            "height" => "15.7 cm",
            "capacity" => "335 ml",
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
