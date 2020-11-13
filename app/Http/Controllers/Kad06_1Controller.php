<?php

namespace App\Http\Controllers;

use App\Http\Requests\Kad06_1Request;
use Illuminate\Support\Facades\Storage;

class Kad06_1Controller extends Controller
{
    //
    public function index(){
        return view('kad06_1');
    }

    public function post(Kad06_1Request $request){
        $image = Storage::disk('public')->put('/kad06_images/',$request->image);
        $image = basename($image);
        Storage::disk('ftp')->put('images/',$request->image);
        $request -> session()->regenerateToken();
        return view('kad06_2',compact('image'));
    }
}
