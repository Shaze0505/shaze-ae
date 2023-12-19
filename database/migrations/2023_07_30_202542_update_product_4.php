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
        $product_id = 4;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Double-walled for the finest view of your coffee brewing experience, The Dripper comes in the signature Shazé trichoid shape. Accompanied by the specialists - a mesh filter, glass funnel and double-walled cups, this piece is a pour-over resort for coffee aficionados.",
            "slider_text" => "Pure Pour Over Poetry",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "What’s Most Im-pour-tant",
            "content_text" => "Almost luminescent in the right light, that dark brew dripping down the clear double-walled borosilicate glass is a visual treat. Perfected to brew-right, the filter allows the coffee to retain essential oils for its rich texture and even coffee extraction.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "Dripper 70.3 mm / Small Dish 119.4 mm/ cup 64.9",
            "width" => "Dripper 68.7 mm / Small Dish 119.4 mm/ Cup 62.9",
            "height" => "Dripper 182 mm / Small Dish 6.1 mm/ Cup 72",
            "capacity" => "Dripper 720 ml / Cups 270 ml"
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
