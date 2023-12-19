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
        Schema::table("masters", function (Blueprint $table){
            $table->string("banner")->after("image")->nullable();
            $table->string("name")->after("title")->nullable();
            $table->string("slug")->after("name")->nullable();
            $table->string("position")->after("slug")->nullable();
            $table->text("description")->after("position")->nullable();
        });

        \App\Models\Master::find(1)->update([
            "banner" => "assets/images/employers/banners/1.jpg",
            "name" => "Daniel Flashman",
            "position" => "Creative director of Tangerine",
            "description" => "Tangerine is a multi, award-winning international design consultancy with studios in London and Seoul. Holders of the Queen’s Award for International Trade, their chairman holds fellowships at the Royal Society of Art and the Chartered Society of Designers.  Tangerine has deep experience of working world-wide for global brands; creating game-changing design solutions that transform businesses.",
        ]);
        \App\Models\Master::find(2)->update([
            "banner" => "assets/images/employers/banners/2.jpg",
            "name" => "Joonie Tan",
            "position" => "Pastry Artist for Lavonne Café",
            "description" => "Joonie Tan, Pastry Artist for Lavonne Café, Bangalore, and Chef Instructor at India’s leading - Lavonne Academy of Baking Science and Pastry Arts, has decorated over 15,000 cakes. Her professional training boasts of her experience with recognized names in the business - Chef Kong Yik Hong, Margaret Carter, Kaysie Lackey, Sheryl Bito, and Kelvin Chua.",
        ]);
        \App\Models\Master::find(3)->update([
            "banner" => "assets/images/employers/banners/3.jpg",
            "name" => "Sonal Holland",
            "position" => "The founder of India Wine Awards",
            "description" => "Sonal Holland, first recipient of the Master of Wine title in India, she now dawns the hat of consultant, retailer, broadcaster, and the founder of India Wine Awards. She’s also certified in Saké and Shochu from the Japan Saké and Shochu Makers Association. Sonal’s trailblazing initiatives and exceptional contributions to India’s wine industry have been widely recognised.",
        ]);
        \App\Models\Master::find(4)->update([
            "banner" => "assets/images/employers/banners/4.jpg",
            "name" => "Rizwan Amlani",
            "position" => "Founder of Dope Coffee Roasters",
            "description" => "Rizwan Amlani, CEO and Founder of Dope Coffee Roasters, shares his love for great coffee making with the right brew ware. Perfect for the job are The Caffeinator and The Steamcatcher with their unparalleled efficiency to brew for you a cup to perfection. And with a design that’s futuristic, inspiration sits atop your table. Get ready to make amazing coffee at the hands of the experts.",
        ]);
        \App\Models\Master::find(5)->update([
            "banner" => "assets/images/employers/banners/5.jpg",
            "name" => "Vikas Uppal",
            "position" => "The Celebratory Drink for Sunday Brunches",
            "description" => "When a cocktail connoisseur loves to uplift spirits, you call him @theoldfashionedmonk. Vikas Uppal is an expert mixologist who makes it his life’s mission to whip up top-shelf cocktails that go down easy and send spirits soaring. Watch him take you through simple steps to create a very unique Shazé Spritz-tini.",
        ]);
        \App\Models\Master::find(6)->update([
            "banner" => "assets/images/employers/banners/6.jpg",
            "name" => "Radhika Batra Shah",
            "position" => "Founder of Radhika's Fine Teas & Whatnots",
            "description" => "Radhika Batra Shah is a lauded tea sommelier and Founder of Radhika’s Fine Teas & Whatnots. Lead by her love, she’s been scouring the world in search of the finest teas and tisanes to create imaginative brews.Watch her share a morning cup while she takes you through the basics of brewing it with finesse.",
        ]);
        \App\Models\Master::find(7)->update([
            "banner" => "assets/images/employers/banners/7.jpg",
            "name" => "Adrian Caroen",
            "image" => "assets/images/employers/adrian.jpg",
            "title" => "CEO & Executive Creative Director, Seymourpowell",
            "position" => "CEO & Executive Creative Director, Seymourpowell",
            "description" => "The lines need to be bold, the shapes need to be iconic so the controlled dynamism across the form really stands out. Seymourpowell, a design and innovation agency with nearly forty years’ experience of creating award winning designs and world first innovations. CEO & Executive Creative Director, Seymourpowell, Adrian Caroen talks about every detail in design that leads to a thoughtful piece. With a strong understanding of what demands an entertaining piece at the hosting table, he highlights the impact of a proud stance, iconic shape, theatrics in display and the larger than life rituals can bring to an experience.",
        ]);
        \App\Models\Master::find(8)->update([
            "banner" => "assets/images/employers/banners/8.jpg",
            "name" => "Snigdha Manchanda",
            "image" => "assets/images/employers/snigdha.jpg",
            "title" => "India's First Certified Tea Sommelier and Founder of Tea Trunk",
            "position" => "India's First Certified Tea Sommelier and Founder of Tea Trunk",
            "description" => "Snigdha, India's First Certified Tea Sommelier and Founder of Tea Trunk, perceives tea as a lifestyle product and not a commodity. She trained under Japanese Tea Master, Nao Numekawa and founded Tea Trunk in 2013. Tea Trunk curates finest teas directly from farmers and crafts them into unique tea blends with all natural ingredients. Having profiled more than 5000 varieties of teas, here’s Snigdha on brewing the best of your chamomile tea - a caffeine-free tea and relax for the day. This year’s World Tea Day we celebrated tea as more than just a beverage, instead a way of life. It's a ritual that brings people together, and it's a way to slow down and appreciate the moment.",
        ]);

        \App\Models\Master::find(9)->delete();

        foreach (\App\Models\Master::all() as $master){
            $master->update([
                "slug" => \Illuminate\Support\Str::slug($master->name)
            ]);
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
