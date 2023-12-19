<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = [
        "shipping_price",
        "tax",
        "other",
    ];

    protected $casts = [
        "other" => "boolean",
    ];
}
