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
        $product_id = 22;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Designed for celebrations, this magnanimous yet minimalistic piece inspires envy in the Shazé signature trichoid shape. The bucket skilfully houses your 3 prized bottles of bubbly, swivelling them instinctively to its gilded edges. Prolonging the temperature of the drink and your moment as the host-with-the-most, is a coolant that sits at its base.",
            "slider_text" => "Extravagance for The ‘Pagne’ & The Gain",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Gatsby-like Perfection",
            "content_text" => "Heavy engineered metal forms the signature trichoid shape of this champagne bucket with curves to hold your triad of bottles. Rippling with detailed brilliance are the handles for a sturdy grip. While the coolant sits to spin out the temperature of the bottles secured within.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "42.8 cm",
            "width" => "45.8 cm",
            "height" => "23 cm",
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
