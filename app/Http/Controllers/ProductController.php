<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $category = null;
        $products = Product::query();
        if ($request->has("category")){
            $category = Category::where("slug", $request->get("category"))->first();
            if ($category){
                $products->where("category_id", $category->id);
            }
        }
        $products = $products->get();
        return view("web.products.index", compact("products", "category"));
    }

    public function show(Product $product){
        $images = [];
        $variants = [];
        foreach ($product->pictures as $picture){
            $images[] = asset($picture->image);
        }
        if (empty($images)){
            $images = [
                asset($product->cover_1),
                asset($product->cover_2)
            ];
        }
        $variants[] = [
            "id" => $product->id,
            "title" => $product->color,
            "color" => $product->rgb,
            "active" => true,
            "images" => $images,
        ];
        foreach ($product->variants as $variant){
            $item = [
                "id" => $variant->id,
                "title" => $variant->color,
                "color" => $variant->rgb,
                "active" => false,
                "images" => []
            ];
            foreach ($variant->pictures as $picture){
                $item["images"] = asset($picture->image);
            }
            if (empty($item["images"])){
                $item["images"] = [
                    asset($product->cover_1),
                    asset($product->cover_2)
                ];
            }
            $variants[] = $item;
        }
        return view("web.products.show", [
            "product" => $product,
            "variants" => $variants,
        ]);
    }

    public function search($q){
        $q = strtolower($q);
        $products = Product::whereRaw("lower(name) like '%$q%'")->get();

        if (count($products) > 0){
            $items = "";
            foreach ($products as $product){
                $items .= '
                    <a href="'.route("products.show", $product->slug).'">
                        <div class="flex flex-col items-center gap-2">
                            <img
                                src="'.asset($product->cover_1).'"
                                class="w-full h-auto"
                                alt="'.$product->name.'"
                            />

                            <p>'.$product->name.'</p>
                        </div>
                    </a>
                ';
            }
            return '
                <div class="w-full h-full top-full py-10 flex flex-col gap-7">
                    <h2 class="text-2xl font-bold">'.count($products).' products found</h2>
                    <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-4">
                        '.$items.'
                    </div>
                </div>
                ';
        }
        return '
            <div class="w-full h-full top-full py-10 flex flex-col gap-7">
                <h2 class="text-2xl font-bold">Hmm, we are not getting any results. Our bad, try another search.</h2>
            </div>
        ';
    }
}
