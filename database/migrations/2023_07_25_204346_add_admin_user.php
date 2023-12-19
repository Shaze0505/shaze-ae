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
        $user = \App\Models\User::where("email", "info@shaze.ae")->first();
        if(!$user){
            \App\Models\User::create([
                "name" => "Admin",
                "is_admin" => 1,
                "email" => "info@shaze.ae",
                "password" => \Illuminate\Support\Facades\Hash::make("shazE@101"),
            ]);
        }else{
            $user->update([
                "is_admin" => 1,
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
