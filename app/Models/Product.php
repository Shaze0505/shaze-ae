<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Product extends Model
{
    use CrudTrait;
    protected $fillable = [
        "order",
        "category_id",
        "name",
        "slug",
        "cover_1",
        "cover_2",
        "price",
        "discount_price",
        "home_visible",
        "banner",
        "banner_text",
        "slider_3",
        "slider_2",
        "slider_1",
        "slider_text",
        "content_header",
        "content_text",
        "content_image",
        "length",
        "width",
        "height",
        "capacity",
        "material",
        "color",
        "rgb"
    ];

    protected $casts = [
        "home_visible" => "boolean"
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function variants(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, "variants", "variant_1_id", "variant_2_id");
    }

    public function pictures(): HasMany
    {
        return $this->hasMany(Picture::class);
    }

    public function getSellingPriceAttribute(){
        return $this->price;
    }

    public function getDiscountDifferenceAmountAttribute(){
        return 0;
    }

    protected static function boot()
    {
        parent::boot();
        static::saving( function ($model) {
            if (!$model->slug){
                $number = rand(1, 30);
                $model->slug = Str::slug($model->name) . "-" . $number;
            }
            if(!$model->order){
                $number = $model->id;
                if (!$number){
                    $number = Product::max("order") + 1;
                }
                $model->order = $number;
            }
        });
    }
}
