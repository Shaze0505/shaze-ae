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
        \App\Models\Category::truncate();
        \App\Models\Product::truncate();

        $products = [
            [1,"The Brewmaster",594, true, 1],
            [1,"The Caffeinator",495, true, 2],
            [1,"The Steamcatcher",374, true, 3],
            [1,"The Dripper",495, true, 4],
            [1,"The Blendist",495, true, 5],
            [4,"The Lavo",396, true, 6],
            [1,"Silver Cups (Set of 6)",253, true, 7],
            [3,"Wavemaker Wine Decanter with the Arch",838, true, 8],
            [1,"Black Cups (Set of 6)",176],
            [1,"White Cups (Set of 6)",176],
            [1,"Espresso Cups (Set of 6)",176],
            [1,"Milk & Sugar Set",100],
            [2,"Alpha Whiskey Tumbler (Set of 6)",319],
            [2,"Beerstein Beer Glasses (Set of 4)",198],
            [2,"Muse Martini Glasses (Set of 6)",319],
            [2,"Simcha Crystal Champagne Glasses (Set of 6)",319],
            [2,"Scentaur Whiskey Snifter Glasses (Set of 6)",319],
            [2,"Wine Glasses (Set of 6)",319],
            [2,"Turntable Shot Tray",594],
            [2,"Berg Ice Bucket",495],
            [2,"Quantum-Shot Measurer",253],
            [2,"The Gatsby - Champagne Bucket",1340],
            [2,"The Popper",77],
            [2,"The Shaker",209],
            [2,"The Wingmen Bar Tools",374],
            [3,"Alchemist Spirit Decanter with Tricoid Base",781],
            [3,"Alpha Whiskey Decanter with Tricoid Base",781],
            [3,"The Cage",1340],
            [3,"Trilogy Bar Table",2800],
            [4,"The Array",495],
            [4,"The Flow",396],
            [4,"The Melt",297],
            [4,"The Skew",396],
            [4,"Radial Coaster (Set of 2)",99],
            [4,"The AMP (Set of 2)",99],
        ];

        $categories = [
            ["Coffee and Tea", "Wake Up and Smell the Coffee", "Coffee brewing techniques • Choosing coffee grind • Coffee-making rituals"],
            ["Drinkware", "All in the Tea-tails", "Brewing perfection • Trending teas to try • Choosing your pekoes"],
            ["Decanter", "Win Over with Wine", "Decanting wine • Wine for the season • Wine pairing"],
            ["Serveware", "Food Pairings: Served in Style", "Serving high-tea • Laying the table for guests • Food plating"],
            ["Candle", "Nature’s Bounty", "The top notes of cinnamon are spicy, aromatic, and leathery. "]
        ];
        $count = 1;
        foreach ($categories as $cat){
            \App\Models\Category::create([
                "order" => $count,
                "name" => $cat[0],
                "slug" => \Illuminate\Support\Str::slug($cat[0]),
                "cover" => "assets/images/category/{$count}c.jpg",
                "image" => "assets/images/category/$count.jpg",
                "title" => $cat[1],
                "description" => $cat[2],
            ]);
            $count ++;
        }
        $count = 1;
        foreach ($products as $item){
            \App\Models\Product::create([
                "order" => $count,
                "category_id" => $item[0],
                "name" => $item[1],
                "slug" => \Illuminate\Support\Str::slug($item[1]),
                "price"  => (float) $item[2],
                "home_visible" => $item[3] ?? false,
                "cover_1" => "assets/images/products/{$count}-c1.jpg",
                "cover_2" => "assets/images/products/{$count}-c2.jpg",
            ]);
            $count ++;
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
