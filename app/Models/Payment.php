<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    const STATUS_PENDING = 1;
    const STATUS_SUCCESS = 2;
    const STATUS_FAILED = 3;

    const STATUSES = [
        self::STATUS_PENDING => "Pending",
        self::STATUS_SUCCESS => "Success",
        self::STATUS_FAILED => "Failed",
    ];

    const STATUS_COLORS = [
        self::STATUS_PENDING => "warning",
        self::STATUS_SUCCESS => "success",
        self::STATUS_FAILED => "danger",
    ];
    protected $fillable = [
        "user_id",
        "order_id",
        "payment_id",
        "amount",
        "session_payload",
        "session_response",
        "check_payload",
        "check_response",
        "note",
        "status",
    ];

    protected $casts = [
        "session_payload" => "object",
        "session_response" => "object",
        "check_payload" => "object",
        "check_response" => "object",
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function getStatusColorAttribute(): string
    {
        return self::STATUS_COLORS[$this->status];
    }

    public function getStatusLabelAttribute(): string
    {
        return self::STATUSES[$this->status];
    }
}
