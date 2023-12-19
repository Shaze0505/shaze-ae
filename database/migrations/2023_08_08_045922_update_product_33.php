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
        $product_id = 33;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "A hosting must-have that floats the boat with its nautical form, ergonomic design, and muted flamboyance. This porcelain platter’s appetizer cavity, attached dip cavity, and four oar-like, gilded skewers, are a complete plating delight.",
            "slider_text" => "Don’t Platter Yourself on Getting It Right",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "The Ripple Effect",
            "content_text" => "The design of the platter ergonomically helps collect residue from your starters at the bottom of the indentation, preventing smearing across the board. The PVD-coated, gold skewers allow you to easily pick that tasty titbit in an ‘awe’-resting fashion.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "Base Plate 30.5 cm / Skewers 17.7 cm",
            "width" => "Base Plate 16 cm / Skewers 1.6 cm",
            "height" => "Base Plate 2.5 cm / Skewers 0.7 cm"
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
