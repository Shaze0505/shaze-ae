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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->string("name")->nullable();
            $table->string("surname")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();

            $table->unsignedBigInteger("status_id")->default(1);
            $table->string("payment_type")->default("cod");
            $table->unsignedBigInteger("payment_id")->nullable();

            $table->string("address")->nullable();
            $table->string("address2")->nullable();
            $table->string("area")->nullable();
            $table->string("state")->nullable();
            $table->string("country")->nullable();

            $table->float("subtotal");
            $table->float("shipment_price")->default(0);
            $table->float("total_tax")->default(0);
            $table->float("total_discount")->default(0);
            $table->float("total_coupon_discount")->default(0);
            $table->float("total_item_discount")->default(0);
            $table->float("total_price");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
