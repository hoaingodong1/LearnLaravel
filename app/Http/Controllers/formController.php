<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input, File;
use App\Http\Requests\signupRequest;

class formController extends Controller {
   public function index(){
      return view("signup");
   }
   function displayInfo(signupRequest $request){
        $users = [
            'hoten' => $hoten = $Request-> input("name"), 
            'tuoi' =>  $tuoi = $Request-> input("tuoi"), 
            'ngaysinh' => $ngaysinh = $Request-> input("ngaysinh"), 
            'cmnd' =>  $cmnd = $Request-> input("cmnd"), 
            'email' =>  $email = $Request-> input("email"), 
        ];
   return view('signup')->with('user',$users);
}

}