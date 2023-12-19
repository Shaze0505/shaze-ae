<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Master;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $masters = Master::all();
        $categories = [];
        foreach (Category::orderBy("order")->get() as $category){
            $categories[] = [
                "title" => $category->name,
                "url" => route("products", ["category" => $category->slug]),
                "image" => asset($category->cover),
                "bg" => asset($category->image),
                "name" => $category->title,
                "description" => $category->description,
            ];
        }
        $products = Product::where("home_visible", 1)->get();
        return view("web.index", compact("masters", "products", "categories"));
    }
}
