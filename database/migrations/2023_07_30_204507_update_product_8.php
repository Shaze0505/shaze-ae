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
        $product_id = 8;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Hosting is your time together, and only sui generis serveware would truly make the cut. Explore wines like a connoisseur would. Shaped perfectly to be different, the wide-based wine decanter invites the wine to aerate well, elevating wine drinking experiences.",
            "slider_text" => "Win Over the Memorable Hosting Experiences",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "It’s a Material World",
            "content_text" => "The high-grade glass creates the contours of its frame. The sturdiness of the finned-base never goes unnoticed despite its lightweight nature owing to the hard-engineering and precision-cut aluminium.",
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
