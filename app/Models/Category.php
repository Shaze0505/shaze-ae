<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Category extends Model
{
    use CrudTrait;
    protected $fillable = [
        "order",
        "name",
        "slug",
        "cover",
        "image",
        "title",
        "description",
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
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
                    $number = Category::max("order") + 1;
                }
                $model->order = $number;
            }
        });
    }
}
