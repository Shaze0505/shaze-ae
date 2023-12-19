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
        $product_id = 32;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "No time for cheesy lines, here’s a simple statement for your cheese tasting events. Made for elaborate arrangements as three cheese knives find their groove in the recesses of the Acacia wood.",
            "slider_text" => "Hosting That Makes Hearts Melt",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Its ‘Gouda’ Be Epic",
            "content_text" => "Milled Acacia wood forms this heavy-duty platter with its patterned back. Stainless steel serves the specialty equipment – a cheese fork and two knives. Securing your hold with their silicon lining.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "Cheese Board 431.8 mm/ Cheisel Knief 111 mm/ Cheese Fork 109 mm/ Soft Cheese Knife 109.4 mm",
            "width" => "Cheese Board 231.2 mm/ Cheisel Knief 54.1 mm/ Cheese Fork 30.5 mm/ Soft Cheese Knife 27 mm",
            "height" => "Cheese Board 14.8 mm/ Cheisel Knief 7 mm/ Cheese Fork 7 mm/ Soft Cheese Knife 7 mm"
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
