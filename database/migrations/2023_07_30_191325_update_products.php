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
        Schema::table("products", function (Blueprint $table){
            $table->float("discount_price")->after("price")->nullable();
            $table->string("banner")->after("home_visible")->nullable();
            $table->text("banner_text")->after("banner")->nullable();
            $table->string("slider_3")->after("banner_text")->nullable();
            $table->string("slider_2")->after("banner_text")->nullable();
            $table->string("slider_1")->after("banner_text")->nullable();
            $table->text("slider_text")->after("banner_text")->nullable();

            $table->text("content_text")->after("slider_3")->nullable();
            $table->string("content_header")->after("slider_3")->nullable();
            $table->string("content_image")->after("slider_3")->nullable();

            $table->string("length")->after("content_text")->nullable();
            $table->string("width")->after("content_text")->nullable();
            $table->string("height")->after("content_text")->nullable();
            $table->string("capacity")->after("content_text")->nullable();
            $table->string("material")->after("content_text")->nullable();
            $table->string("color")->after("content_text")->nullable();
            $table->boolean("has_variant")->after("home_visible")->default(false);
        });

        Schema::create("variants", function (Blueprint $table){
            $table->id();
            $table->unsignedInteger("variant_1_id");
            $table->unsignedInteger("variant_2_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
