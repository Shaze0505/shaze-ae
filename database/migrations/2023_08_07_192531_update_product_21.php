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
        $product_id = 21;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "The Quantum shot measures come in the Shazé-signature trichoid shape. The distinguished medallists echo a sweeping finish on their gold, silver and bronze frames. Each measured up to match master mixology skills",
            "slider_text" => "‘Make It Large’ Kinda Hosting",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Measure Your Good Times",
            "content_text" => "Three glasses of brush-finished stainless steel are shaped to precisely pour out to the last drop for an accurate measure. With their rounded base and tricoid mouth, they are engineered for ease of pouring. Of course, we’re making it competitive with the gold, silver, and bronze measure according to the size of the drink you request.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "19.2 cm",
            "width" => "6.4 cm",
            "height" => "7.9 cm",
            "capacity" => "25/35/50 ml",
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
