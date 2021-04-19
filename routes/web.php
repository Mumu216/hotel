<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\Admin\Ordercontroller;
use App\Http\Controllers\Admin\Bookingcontroller;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\PaymentController;
//use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RoomTypeController;
use App\Http\Controllers\Admin\ReceptionistController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController;











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

/*Route::get('/', 'FrontController@index');
Route::get('/ contact', 'FrontController@contact');
*/

// website  /frontened route here

Route::get('/frontend/website',[HomeController::class,'website'])->name('website');
Route::get('/registration/form',[UserController::class,'registrationForm'])->name('registration.form');
Route::post('/registration/create',[UserController::class,'register'])->name('register');



Route::get('/login',[UserController::class,'loginForm'])->name('login.form');
Route::post('/dologin',[UserController::class,'doLogin'])->name('login');

Route::get('/logout',[UserController::class,'logout'])->name('logout');







// admin route here

Route::group(['prefix'=>'admin'],function(){

    
    

Route::get('login',[AdminUserController::class,'loginForm'])->name('admin.login');
Route::post('do-login',[AdminUserController::class,'dologin'])->name('admin.dologin');


Route::get('/',function(){
    $title='Dashboard';
    return view('backend.master', compact('title'));

}); 




//Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

// admin login route here

//Route::get('login',[AdminUserController::class,'loginForm'])->name('admin.login');
//Route::post('do-login',[AdminUserController::class,'dologin'])->name('admin.dologin');
Route::group(['middleware'=>'admin-auth'], function(){

Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('logout',[AdminUserController::class,'logout'])->name('admin.logout');







//Route::get('/admin/admin',[AdminController::class,'admin'])->name('admin');
Route::get('/admin/users',[AdminController::class,'users'])->name('users');
Route::get('/admin/room',[AdminController::class,'room'])->name('room');
Route::get('/admin/facilities',[AdminController::class,'facilities'])->name('facilities');
Route::get('/admin/room service',[AdminController::class,'room service'])->name('room service');







//Order routes

Route::get('/admin/order',[Ordercontroller::class,'orderlist'])->name('order.orderlist');
Route::post('/admin/create',[Ordercontroller::class,'create'])->name('order.create');

//boooking routes

Route::get('/admin/booking', [BookingController::class,'bookinglist'])->name('booking.bookinglist');
Route::post('/admin/booking/create',[BookingController::class,'create'])->name('booking.create');

// room routes
Route::group(['prefix'=>'room'],function()

{

Route::get('list',[RoomController::class,'list'])->name('room.list');
route::get('createform',[RoomController::class,'createForm'])->name('room.createform');
Route::post('store',[RoomController::class,'store'])->name('room.store');
});

//payment routes

Route::get('/payment/list',[PaymentController::class,'list'])->name('payment.list');
Route::get('/payment/createform',[PaymentController::class,'createForm'])->name('payment.createform');
Route::post('/payment/store',[PaymentController::class,'store'])->name('payment.store');





// category routes

Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/createform',[CategoryController::class,'createform'])->name('category.createform');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');

// room type routes

Route::get('/roomtype/list',[RoomTypeController::class,'list'])->name('roomtype.list');
Route::get('/roomtype/createform',[RoomTypeController::class,'createform'])->name('roomtype.createform');
Route::post('/roomtype/store',[RoomTypeController::class,'store'])->name('roomtype.store');

// rece[tionist routes

Route::get('/receptionist/list',[ReceptionistController::class,'list'])->name('receptionist.list');
Route::get('/receptionist/createform',[ReceptionistController::class,'createform'])->name('receptionist.createform');
Route::post('/receptionist/store',[ReceptionistController::class,'store'])->name('receptionist.store');



});


});

    
