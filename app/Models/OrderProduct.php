<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable = [
        "order_id",
        "product_id",
        "quantity",
        "sold_price",
        "actual_price",
        "discounted_amount",
    ];
}
