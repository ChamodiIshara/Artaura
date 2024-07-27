<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manageLogin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtsController;
//use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\WishlistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Login part
Route::get('/login',[manageLogin::class, 'login'])->name('login');
Route::post('/login',[manageLogin::class, 'loginPost'])->name('login.post');

//Registration part
Route::get('/registration',[manageLogin::class, 'registration'])->name('registration');
Route::post('/registration',[manageLogin::class, 'registrationPost'])->name('registration.post');

//Logout part
Route::get('/logout',[manageLogin::class,'logout'])->name('logout');

//whatever loggin user can do inside this route group
Route::group(['middleware'=>'auth'],function(){
  //  Route::get('/profile',function(){
    //    return "Welcome To ArtAura";
   // });
    route::get('/showcart',[HomeController::class,'showcart']);
    });

    route::get('/redirect',[HomeController::class,'redirect']);
    route::get('/home',[HomeController::class,'index']);
    //upload arts
    route::get('arts',[AdminController::class,'arts']);
    route::post('uploadarts',[AdminController::class,'uploadarts']);
    //show all arts
    route::get('showarts',[AdminController::class,'showarts']);

    //showorder
    route::get('/showorder',[AdminController::class,'showorder']);
    route::get('/showpayment',[AdminController::class,'showpayment']);



    //delete arts
    route::get('/deletearts/{id}',[AdminController::class,'deletearts']);
   //update arts
    route::get('/updateview/{id}',[AdminController::class,'updateview']);
    route::post('/updatearts/{id}',[AdminController::class,'updatearts']);
  //search
  route::get('/search',[HomeController::class,'search']);
  //Add To cart
  route::post('/addcart/{id}',[HomeController::class,'addcart']);

//delete cart
route::get('/delete/{id}',[HomeController::class,'deletecart']);

//updatestatus
route::get('/updatestatus/{id}',[AdminController::class,'updatestatus']);
//view Category
route::get('/view_category',[AdminController::class,'view_category']);
route::post('/add_category',[AdminController::class,'add_category']);

//delete category
route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

//product Details
route::get('/art_details/{id}',[HomeController::class,'art_details']);



//order
Route::get('checkout',[CheckoutController::class,'index']);
Route::post('placeorder', [CheckoutController::class,'placeorder']);

Route::post('myorder', [HomeController::class,'myorder']);
//Route::post('/myorder',[HomeController::class,'orderitem']);
//Galary
route::get('/gallary',[HomeController::class,'gallary']);
//offers
route::get('/myoffers',[HomeController::class,'myoffers']);

//about
route::get('/about',[HomeController::class,'about']);
//Categoty
//Route::get('/category',[HomeController::class,'category']);
//route::get('/discription',[HomeController::class,'discription']);

//wishlist
Route::post('/wishlist/{id}', [WishlistController::class,'wishlist'])->name('wishlist.store');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});
