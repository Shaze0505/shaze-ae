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
        $product_id = 5;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "The Blendist is designed for French-press coffee making precision and a joie de vivre way of life. A temperature gauge for precision brewing and an ergonomic handle for a solid grip, is made for full control on your ritualistic mornings.",
            "slider_text" => "Pour Like Never Before",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Don’t Always Blend In",
            "content_text" => "Borosilicate glass forms the tubular kettle secured inside the hard-engineered fins. The temperature indicator rests atop the gilded, zamac lid. The bakelite handle allows a thumb grip for convenient carrying. The precision plunger with its mesh is ideal for brewing your coarse grinds.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "18 cm",
            "width" => "10.8 cm",
            "height" => "20 cm",
            "capacity" => "750 ml"
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
