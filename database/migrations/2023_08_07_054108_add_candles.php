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
        $candles = [
            ["Dark Pepper"	,179, "Cardamom, nutmeg, and black pepper form the powerfully spicy top notes in this candle as jasmine, leather and Iris, form the heart. Moss and wood enhance the base notes to intrigue olfactory senses, spinning a web of undiminished sensuality in your space.", "Set in Shazé orange jars, with designed lids bearing intricate motifs, our candles are a delight for the senses. Spice and floral sensuality meet the earthiness of wood and musk in our exotically fragrant Dark Pepper.",

                ],
            ["Neroli Night"	,179, "Citrus top notes are reinforced and softened with mid notes of orange blossom and basil, harmonizing the base notes of Neroli, jasmine and Ylang. Creating a fragrance that’s simply transcendent.", "Set in Shazé orange jars, with designed lids bearing intricate motifs, our candles are a delight for the senses. The tartness of citrus meets soothing lush florals to create a symphony of scents making the Neroli Night a way to welcome guests.",

                ],
            ["Purple Magic"	,179, "Starting from the top, bergamot, blackcurrant and freesia blend mystically with the mid notes of raspberry accord, Iris and jasmine. And, holding it together with its earthiness at the base are almond, vanilla and musk.", "Set in Shazé orange jars, with designed lids bearing intricate motifs, our candles are a delight for the senses. Creating a depth of sweet fruity fragrance with its zest-meets-floral notes is Purple Magic. ",

                ],
            ["Namibian Road"	,179, "The top notes of cinnamon are spicy, aromatic, and leathery. The cedar wood mid notes add balsamic undertones to the fragrance. The base notes of amber and vanilla create a musky foundation of olfactory enchantment.", "Set in Shazé orange jars, with designed lids bearing intricate motifs, our candles are a delight for the senses.  With Namibian Road, spice-meets-leather note blends with sensual notes reminiscent of the sun-drenched lands of the Orient. ",

                ],
            ["Pastel Morning"	,179, "Making this fragrance warm, aromatic and sensual, are a collection of exotic green top notes, with nuances of spice and blackcurrant at the heart, and Patchouli, blackberries and ebony at its gourmet base.", "Set in Shazé orange jars, with designed lids bearing intricate motifs, our candles are a delight for the senses. Here citrusy sweetness blends with a gourmet, woody base to create the potent, warm Pastel Morning.",

                ],
        ];
        $count = 37;
        foreach ($candles as $candle){
            \App\Models\Product::create([
                "order" => $count,
                "category_id" => 5,
                "name" => $candle[0],
                "slug" => \Illuminate\Support\Str::slug($candle[0]),
                "price"  => (float) $candle[1],
                "home_visible" => false,
                "cover_1" => "assets/images/products/{$count}-c1.jpg",
                "cover_2" => "assets/images/products/{$count}-c2.jpg",
                "banner" => "assets/images/products/candle-banner.jpg",
                "banner_text" => $candle[3],
                "slider_text" => $candle[0],
                "slider_1" => "assets/images/products/{$count}_slider_1.jpg",
                "slider_2" => "assets/images/products/{$count}_slider_2.jpg",
                "slider_3" => "assets/images/products/{$count}_slider_3.jpg",
                "content_header" => "Nature’s Bounty",
                "content_text" => $candle[2],
                "content_image" => "assets/images/products/{$count}_content.jpg",
                "length" => "7.7 cm",
                "width" => "7.7 cm",
                "height" => "13.3 cm",
            ]);
            $count++;
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
