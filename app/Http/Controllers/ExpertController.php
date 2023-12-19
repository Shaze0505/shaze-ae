<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index(){
        $experts = Master::all();
        return view("web.experts.index", [
            "experts" => $experts
        ]);
    }

    public function show($slug){
        $expert = Master::whereSlug($slug)->firstOrFail();
        return view("web.experts.show", [
            "expert" => $expert
        ]);
    }
}
