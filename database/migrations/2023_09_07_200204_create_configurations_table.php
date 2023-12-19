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
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->float("shipping_price",)->default(0);
            $table->float("tax",)->default(5);
            $table->boolean("other",)->default(true);
            $table->timestamps();
        });

        \App\Models\Configuration::create([
            "shipping_price" => 0,
            "tax" => 5,
            "other" => true,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configurations');
    }
};
