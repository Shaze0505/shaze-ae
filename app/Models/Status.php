<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\HasIdentifiableAttribute;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasIdentifiableAttribute;
    const STATUS_UNPAID = 10;
    const STATUS_PAYMENT_FAILED = 15;
    const STATUS_NEW = 20;
    const STATUS_ON_THE_WAY = 30;
    const STATUS_DELIVERED = 40;
    const STATUS_CANCELLED = 50;

    public static array $colors = [
        5 => "warning",
        10 => "info",
        15 => "danger",
        20 => "primary",
        30 => "warning",
        40 => "success",
        50 => "danger",
    ];

    protected $fillable = [
        "id",
        "name"
    ];

    public function getStatusColorAttribute(): string
    {
        return self::$colors[$this->id];
    }
}
