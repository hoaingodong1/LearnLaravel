<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Facades\Date;
use App\Models\Slide;
use App\Models\Product;
class PageController extends Controller
{
    public function getIndex(){    
    $slide= Slide::all();       
    $new_product=Product::where('new',1)->get();
    return view('page.trangchu',compact('slide','new_product'));
}
}
