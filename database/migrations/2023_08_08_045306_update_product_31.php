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
        $product_id = 31;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "A great spread is only as good as the well served appetizers – where temperature makes the gastronomic difference, and plating, a visual one. This dynamically curved platter with its temperature - prolonging soapstones will have everyone wondering what's under that hood.",
            "slider_text" => "You’ve Been Served",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "It’s A Material World After All",
            "content_text" => "Owing to its high-gloss reflectiveness is the PVD finish, and food-grade stainless steel. The undulating indents allow for creative plating while adding to the aesthetics of the piece.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "33.5 cm",
            "width" => "16.2 cm",
            "height" => "33.6 cm",
            "capacity" => "700 ml"
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
