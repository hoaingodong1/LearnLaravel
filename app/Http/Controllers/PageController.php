<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Facades\Date;
use App\Models\Slide;
class PageController extends Controller
{
    //
    // public function getIndex(){
    //     return view('page.trangchu');
    // }
    public function getIndex(){
    
    $slide= Slide::all();    
    return view('page.trangchu',compact('slide',));
}
}
