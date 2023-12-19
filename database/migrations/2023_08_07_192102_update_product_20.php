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
        $product_id = 20;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Ergonomically engineered, this stainless steel ice bucket with its metallic strainer riddles away perspiration, keeping the ice dry for your drink. Making ‘cool’ an understatement to what this ice bucket can do with its strainer and nifty tongs.",
            "slider_text" => "Makes Hosting Ice and Easy",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Thaw-ed of Everything",
            "content_text" => "Brush-finished stainless steel, drawn into the signature Shazé trichoid shape, forms the outer bucket. Engineered with perforations on spun steel, leaves you high and the ice dry. The tongs craftily pick two ice cubes simultaneously.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "29.8 cm",
            "width" => "23.8 cm",
            "height" => "28.3 cm",
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
