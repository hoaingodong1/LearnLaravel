<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TongController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('test');
// });

// Route::post('yt',[TongController::class,'tinhtong']);
use App\Http\Controllers\formController;
// Route::get("signup",[formController::class,'index']);
// Route::post("signup",[formController::class,'displayInfo'])->name('displayInfo');
use App\Http\Controllers\Authentication;
use App\Http\Controllers\PageController;
// use App\Http\Requests\Signup;

// Route::get(
//     '/',
//     'App\Http\Controllers\UserController@getIndex'
// );

// Route::get('admin', function () {
//     return view('adminpage');
// });

// Route::get('admin',[AdminController::class,'index']);
// Route::post('admin',[AdminController::class,'addRoom']);


// Route::group(['prefix' => 'admin'], function () {
//     Route::get('user', function () {
//         echo 'Users Management';
//     });
//     Route::get('product', function () {
//         echo 'Products Management';
//     });
// });

// Route::get(
//     '/sum',function () {
//         return view('sum');
//     }
// );

// Route::post('sum', 'App\Http\Controllers\UserController@sum');

// Route::get(
//     '/login ',function () {
//         return view('login');
//     }
// );

// Route::get('/signup',[Authentication::class,'signup']);
// Route::post('/signup',[Authentication::class,'displayInfor']);
	
// Route::get('/',function (){
//     return view('addRoom');
// });
Route::get('/',[PageController::class,'getIndex']);
