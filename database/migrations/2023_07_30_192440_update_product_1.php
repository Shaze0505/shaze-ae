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
        $product_id = 1;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Tea time is a sacred ritual for which no ordinary brew ware will do. The Brewmaster is our dramatic take on a teapot with its hard-engineered base, contoured glass, a metal infuser, and an in-built timer. ",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "slider_text" => "A Tea Party Done Right",
            "content_header" => "Tea Amo",
            "content_text" => "Borosilicate glass can defy temperature from 10 to 100 ° Celsius without cracking. Here the hand-blown glass creates this contoured kettle. Hold it steady with an ergonomically designed handle and a thumb grip. Pour cleanly with the technically-angled spout. Don’t strain yourself! Submerge the tea leaves in the stainless-steel EPS mesh infuser. Steep precisely with the Zamac lid bearing a timer for up to 5 minutes.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "15 cm",
            "width" => "11 cm",
            "height" => "30 cm",
            "capacity" => "1800 ml"
        ]);

        for ($i = 1; $i < 8; $i++){
            $product->pictures()->create([
                "image" => "assets/images/products/{$product_id}_slider_main_$i.jpg"
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
