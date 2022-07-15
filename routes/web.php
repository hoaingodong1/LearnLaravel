<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TongController;
use App\Http\Controllers\CreateTableController;
use App\Http\Controllers\UserController;


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
// Route::get('/',[CreateTableController::class,'CreateTable']);
// Route::get('/', function(){
//     $data=DB::table('customers')->get();
//     dd($data);

// });


// trang chủ
Route::get('homepage',[PageController::class,'getIndex']);
Route::get('/type/{id}',[PageController::class,'getLoaiSp']);
Route::get('/admin-add-form',[PageController::class,'getAdminAdd']);
Route::post('/admin-add-form',[PageController::class,'postAdminAdd']);


// //trang admin
// Route::get('/trangchu',[PageController::class,'getIndex']);
// Route::get('/type/{id}',[PageController::class,'getLoaiSp']);

//trang admin
Route::get('/trangchu',[PageController::class,'getIndex']);
Route::get('/type/{id}',[PageController::class,'getLoaiSp']);

//trang admin
Route::get('/admin',[PageController::class, 'getAdminpage']);
Route::post('/admin',[PageController::class,'postAdminAdd'])->name('admin-add-form');

Route::get('/showadmin',[PageController::class, 'getIndexAdmin']);


Route::get('/admin-edit-form/{id}',[PageController::class,'getAdminEdit']);
Route::post('/admin-edit',[PageController::class,'postAdminEdit']);
Route::post('/admin-delete/{id}',[PageController::class,'postAdminDelete']);

//register
Route::get('/register', function () {return view('users.register');
    });
Route::post('/register',[UserController::class,'Register']);
//login 
Route::get('/login', function () {return view('users.login');						
    });		
Route::post('/login',[UserController::class,'Login']);
Route::get('/logout',[UserController::class,'Logout']);

//shopping basket
Route::get('add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('themgiohang');												
Route::get('del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('xoagiohang');												