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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
            $table->softDeletes();
        });

        \App\Models\Status::create([
            "id" => \App\Models\Status::STATUS_UNPAID,
            "name" => "Unpaid"
        ]);

        \App\Models\Status::create([
            "id" => \App\Models\Status::STATUS_NEW,
            "name" => "New"
        ]);

        \App\Models\Status::create([
            "id" => \App\Models\Status::STATUS_ON_THE_WAY,
            "name" => "On the way"
        ]);

        \App\Models\Status::create([
            "id" => \App\Models\Status::STATUS_DELIVERED,
            "name" => "Delivered"
        ]);

        \App\Models\Status::create([
            "id" => \App\Models\Status::STATUS_CANCELLED,
            "name" => "Cancelled"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
