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
        $product_id = 6;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "The Lavo water carafe, with its lava-like rivulets flowing down the linear body, makes serving water, a pleasure. Its stoneware frame allows water to stay cooler, longer.",
            "slider_text" => "Water They Going On About",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Water-ther Way to Host",
            "content_text" => "Set in stoneware the carafe secures the aesthetic and the innately cool temperature of water when served. The mattified texture enhances the radiating lines making a statement every time you host. Adding an unmistakable highlight is gold accent that rims the carafe and the water glasses it comes with.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "Carafe-14.1 cm / Stopper-6.71 cm / Cup-8.7 cm",
            "width" => "Carafe-14.1 cm / Stopper-6.71 cm / Cup-8.7 cm",
            "height" => "Carafe-29 cm / Stopper-4.83 cm / Cup-9.15 cm",
            "capacity" => "Carafe-1.3 liter / Cup-230 ml"
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
