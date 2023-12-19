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
        Schema::create('masters', function (Blueprint $table) {
            $table->id();
            $table->string("image")->nullable();
            $table->string("title")->nullable();
            $table->timestamps();
        });

        $masters = [
            "Daniel - Creative Director of Tangerine",
            "Joonie Tan, Pastry Artist for Lavonne Café",
            "Sonal Holland The founder of India Wine Awards",
            "The Right Brewing Tools To Help You Wake Up and Smell the Coffee.",
            "Shaze Spritz-tini : The Celebratory Drink for Sunday Brunches",
            "Perfecting The Morning Brew With Radhika Batra Shah",
            "Unfiltered: The Fundamentals Of Great Coffee Making",
            "The Perfect Serve For Wine: Hosting 101",
            "Pour Over: A Coffee-Making Artform",
        ];

        $count = 1;
        foreach ($masters as $master){
            \App\Models\Master::create([
                "image" => "assets/images/employers/$count.jpg",
                "title" => $master
            ]);
            $count++;
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masters');
    }
};
