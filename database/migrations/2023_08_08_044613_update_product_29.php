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
        $product_id = 29;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Serving wine, whiskey, and more at the next party? Three decanters balance seamlessly on their ballerina’s foot in a heavy wooden base with Zamac trimmings. A visual delight and showcase of physical ingenuity, The Trilogy brings style and efficiency to your bar.",
            "slider_text" => "Pour Like Never Before",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Three’s Company",
            "content_text" => "Hand-blown lead-free crystal forms 3 unique decanters with their hand-cut wave patterns – preventing your drinks from getting flat. The metal neck tags and writing pen help record the liquor details. An ergonomic aerator with its tulip shape and ripple pattern aerates wine faster – serving the Wavemaker well. The Alchemist’s cork stopper with its Zamac top prevents liquor spills while The Alpha’s glass stopper protects your whiskey.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "Trilogy Bar - 66 cm / Alpha - 16.4 cm / Wavemaker - 19 cm / Alchemist - 19 cm",
            "width" => "Trilogy Bar - 19.4 cm / Alpha - 16.4 cm / Wavemaker - 19 cm / Alchemist - 19 cm",
            "height" => "Trilogy Bar - 19.4 cm / Alpha - 16.4 cm / Wavemaker - 19 cm / Alchemist - 19 cm",
            "capacity" => "750 ml each"
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
