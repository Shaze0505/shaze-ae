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
        $product_id = 23;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Picture this: A palm-sized bottle opener that is unconventionally shaped and never gets misplaced .… We’ll definitely drink to that!",
            "slider_text" => "Pop open the drinks, the drama, and the good times!",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Cheers to your new barware best friend!",
            "content_text" => "This easy-to-grip bottle opener has a rigid stainless steel body. The PVD coating along its exterior prevents corrosion and ensures heavy-duty usage. Crack open a single bottle or a hundred, The Popper can handle all the heat and more",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "15.6 cm",
            "width" => "6.9 cm",
            "height" => "2.3 cm",
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
