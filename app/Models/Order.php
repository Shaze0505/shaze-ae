<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use CrudTrait;

    use SoftDeletes;
    const TAX = 0;
    const DELIVERY = 0;

    const PAYMENT_COD = "cod";
    const PAYMENT_ONLINE = "online";

    const PAYMENT_TYPES = [
        self::PAYMENT_COD => "COD",
        self::PAYMENT_ONLINE => "Debit/Credit",
    ];

    protected $fillable = [
        "user_id",
        "name",
        "surname",
        "phone",
        "email",
        "status_id",
        "payment_type",
        "payment_id",
        "address",
        "address2",
        "area",
        "state",
        "country",
        "subtotal",
        "shipment_price",
        "total_tax",
        "total_discount",
        "total_coupon_discount",
        "total_item_discount",
        "total_price",
    ];

    public function getOrderNumberAttribute()
    {
        $id = sprintf("%06d", $this->id);
        return "#$id";
    }

    public function getFullnameAttribute(): ?string
    {
        if ($this->name && $this->surname){
            return "$this->name $this->surname";
        }elseif ($this->name){
            return $this->name;
        }
        return $this->surname;
    }

    public function getFullAddressAttribute(): string
    {
        $address = $this->address;
        if ($this->address2 && strlen($this->address2) > 1){
            $address .= ", $this->address2";
        }
        if ($this->area && strlen($this->area) > 1){
            $address .= ", $this->area";
        }
        if ($this->state && strlen($this->state) > 1){
            $address .= ", $this->state";
        }
        if ($this->country && strlen($this->country) > 1){
            $address .= ", $this->country";
        }
        return $address;
    }

    public function getStatusLabelAttribute(): ?string
    {
        return $this->status->name ?? "-";
    }

    public function getCreatedAtLabelAttribute(): ?string
    {
        return Carbon::parse($this->created_at)->format("d-m-Y H:i");
    }

    public function getCreatedAtDifferenceAttribute(): ?string
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function getPaymentTypeLabelAttribute(): string
    {
        return self::PAYMENT_TYPES[$this->payment_type];
    }

    public function order_products(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, "order_product")
            ->withTimestamps()
            ->withPivot([
                "quantity",
                "sold_price",
                "actual_price",
                "discounted_amount",
            ]);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, "status_id", "id");
    }

    public function status_histories(): HasMany
    {
        return $this->hasMany(OrderStatus::class);
    }

    public function update_status(Status $status, $note = null): array
    {
        $this->update([
            "status_id" => $status->id
        ]);
        OrderStatus::create([
            "order_id" => $this->id,
            "status_id" => $status->id,
            "details" => $note,
        ]);
        return [
            "status" => true,
            "message" => "Successfully status is updated"
        ];
    }
}
