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
        $product_id = 15;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "cover_1" => "assets/images/products/{$product_id}-c1.jpg",
            "cover_2" => "assets/images/products/{$product_id}-c2.jpg",
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Enjoy your martini shaken or stirred, but it doesn’t end there. Enjoying it best also depends on how it’s served. Befitting the flavour and temperature of the chilled drink with its steeply sloping body and long stem.",
            "slider_text" => "Get The Party Shaken Not Stirred",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Designed to Sip on Good Spirit",
            "content_text" => "The barely-there 2mm thickness of the glass allows you to savour a sip without interruption. Neither do drinks turn flat in the crystal.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "width" => "11.8 cm",
            "height" => "17.6 cm",
            "capacity" => "215 ml"
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
