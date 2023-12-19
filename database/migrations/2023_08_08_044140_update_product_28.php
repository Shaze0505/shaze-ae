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
        $product_id = 28;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Hosting to us is all about fluency tempered with functional ease. This Shazé piece is crafted alongside design savants, Seymourpowell, with an intergalactic look to serve their purpose with efficiency.",
            "slider_text" => "Your Bar Deserves An Upgrade",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "It’s A Material World",
            "content_text" => "Hand-blown, lead-free crystal glass forms the bold contours of the decanter. The unique conical base is complete only with its sturdy fins preventing your whisky from straying. A cork stopper perfectly fits into the neck, while the metal finish atop it adds to the contrasting appeal against clear glass.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "25 cm",
            "width" => "12 cm",
            "height" => "12 cm",
            "capacity" => "1 ltr"
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
