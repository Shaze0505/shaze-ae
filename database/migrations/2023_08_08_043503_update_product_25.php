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
        $product_id = 25;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Barware that has character and looks great is not for hiding behind the counter. Bring them into the spotlight to add theatrics to your cocktail making skills. These wingmen will help you nail any concoction that you choose to make.",
            "slider_text" => "A Smooth Mixer Needs Great Wingmen",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Raise The Bar",
            "content_text" => "This ergonomic set includes a stirrer, a Hawthorne strainer, a muddler and a bottle opener. Each has a food-safe, stainless steel head and a gold, weighted handle with a rounded end to fit into its corresponding groove.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "34.6 cm",
            "width" => "32.8 cm",
            "height" => "5 cm"
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
