<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view("web.profile.index", [
            "user" => $user
        ]);
    }

    public function edit(){
        $user = Auth::user();
        return view("web.profile.edit", [
            "user" => $user
        ]);
    }

    public function update(Request $request){
        $user = Auth::user();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phone' => ['max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
        ]);
        $user->update([
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
        ]);
        return redirect()->back();
    }
}
