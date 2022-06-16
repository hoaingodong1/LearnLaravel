<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers;

class TongController extends Controller
{
    function tinhtong () {
        $hsa = $_POST['hsa'];
        $hsb = $_POST['hsb'];
        $total = $hsa+$hsb;
        return view('test') ->with('sum',$total);
    }

}