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
        $product_id = 1;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Tea time is a sacred ritual for which no ordinary brew ware will do. The Brewmaster is our dramatic take on a teapot with its hard-engineered base, contoured glass, a metal infuser, and an in-built timer. ",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "slider_text" => "A Tea Party Done Right",
            "content_header" => "Tea Amo",
            "content_text" => "Borosilicate glass can defy temperature from 10 to 100 ° Celsius without cracking. Here the hand-blown glass creates this contoured kettle. Hold it steady with an ergonomically designed handle and a thumb grip. Pour cleanly with the technically-angled spout. Don’t strain yourself! Submerge the tea leaves in the stainless-steel EPS mesh infuser. Steep precisely with the Zamac lid bearing a timer for up to 5 minutes.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "15 cm",
            "width" => "11 cm",
            "height" => "30 cm",
            "capacity" => "1800 ml"
        ]);

        $product_id = 2;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Great coffee is the rocket fuel you need to get through a high-powered day. And, The Caffeinator propels you into the future. This intuitively designed coffee maker steals the limelight at your coffee bar.",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "slider_text" => "To Dirty Coffees That Make Doppio Days",
            "content_header" => "Words Cannot Espresso",
            "content_text" => "Borosilicate glass can defy temperature from 10 to 100 ° Celsius without cracking. It is moulded for ease of collecting and pouring your brew. The ribbed neck affords a stronger grip as it settles back into an aluminium stand with its sturdy podium and laser-cut base. We’re talking algorithmic precision. We haven’t forgotten the stainless steel coaster to catch stray droplets.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "15.5 cm",
            "width" => "11 cm",
            "height" => "30.3 cm",
            "capacity" => "650 ml"
        ]);

        $product_id = 3;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "A coffee connoisseur always gets the 'bloom’ pour right. For that skilfully made coffee with visual impact and consistency, we bring you a precision kettle. Its swan-like spout, temperature indicator, and ergonomically designed handle help your pour-over process achieve perfection.",
            "slider_text" => "Pour Like Never Before",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_1.jpg",
            "content_header" => "It’s Getting Hot in Here",
            "content_text" => "A stainless steel kettle that has its own food thermometer assists the temperature indicator on the gilded lid. It is housed within a PVD-coated, aluminium cage body and covered with an anodized, golden lid. The bakelite handle has a thumb grip for ease of carrying and pouring",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "15 cm",
            "width" => "11 cm",
            "height" => "30 cm",
            "capacity" => "780 ml"
        ]);

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

        $product_id = 7;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Strong coffee needs strong companions. Strengthened with extreme heat the mugs are perfected with a metal-meets-stone finish. The ergonomics in design manifests through the easy-to-pick handle.",
            "slider_text" => "I’d Love A Cup-le More",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "Tempered for Durability",
            "content_text" => "Heated to high temperatures for durability, this glazed stoneware is moulded into our coffee mugs. Their broad bottom and narrow top give them a light-weight appearance. The round handle encourages a better grip.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "7 cm",
            "width" => "7 cm",
            "height" => "9.6 cm",
            "capacity" => "370 ml"
        ]);

        $product_id = 8;
        $product = \App\Models\Product::find($product_id);
        $product->update([
            "banner" => "assets/images/products/{$product_id}_banner.jpg",
            "banner_text" => "Hosting is your time together, and only sui generis serveware would truly make the cut. Explore wines like a connoisseur would. Shaped perfectly to be different, the wide-based wine decanter invites the wine to aerate well, elevating wine drinking experiences.",
            "slider_text" => "Win Over the Memorable Hosting Experiences",
            "slider_1" => "assets/images/products/{$product_id}_slider_1.jpg",
            "slider_2" => "assets/images/products/{$product_id}_slider_2.jpg",
            "slider_3" => "assets/images/products/{$product_id}_slider_3.jpg",
            "content_header" => "It’s a Material World",
            "content_text" => "The high-grade glass creates the contours of its frame. The sturdiness of the finned-base never goes unnoticed despite its lightweight nature owing to the hard-engineering and precision-cut aluminium.",
            "content_image" => "assets/images/products/{$product_id}_content.jpg",
            "length" => "7 cm",
            "width" => "7 cm",
            "height" => "9.6 cm",
            "capacity" => "370 ml"
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
