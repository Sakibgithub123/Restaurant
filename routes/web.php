<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TableBookController;
use App\Notifications\BookingEmailNotification;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[RestaurentController::class,'index'])->name('home');
Route::get('about',[RestaurentController::class,'About'])->name('about');
Route::get('book_table',[RestaurentController::class,'book_table'])->name('tableBook');
Route::post('/book-table',[RestaurentController::class,'saveBookTable'])->name('save.bookTable');
Route::get('event',[RestaurentController::class,'Event'])->name('event');
Route::get('/gallery',[RestaurentController::class,'Gallery'])->name('gallery');
Route::get('menu',[RestaurentController::class,'Menu'])->name('menu');
Route::get('all-menu',[RestaurentController::class,'allMenu'])->name('all.menu');
Route::get('menu-2/{id}',[RestaurentController::class,'Menu_2'])->name('menu.2');
Route::get('/special',[RestaurentController::class,'Special'])->name('special');

Route::get('/contact',[RestaurentController::class,'Contact'])->name('contact');
Route::post('/contact',[RestaurentController::class,'saveContact'])->name('save.contact');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('dashboard');
    Route::get('/category',[FoodController::class,'FoodCategory'])->name('category');
    Route::post('category-add',[FoodController::class,'AddFoodCategory'])->name('food.category');
    Route::post('category-dlt',[FoodController::class,'DeleteFoodCategory'])->name('dlt.category');


    Route::get('/food',[FoodController::class,'FoodName'])->name('food');
    Route::post('/food',[FoodController::class,'AddFoodName'])->name('food.name');
    Route::post('/food-dlt',[FoodController::class,'DeleteFood'])->name('dlt.food');

    Route::get('/food-menu',[FoodController::class,'FoodMenu'])->name('food.menu');
    Route::post('/food-menu',[FoodController::class,'AddFoodMenu'])->name('food.menu');
    Route::get('/manage-menu',[FoodController::class,'manageMenu'])->name('manage.menu');
    Route::get('/status/{id}',[FoodController::class,'Status'])->name('status');
    Route::post('/delete-menu',[FoodController::class,'deleteMenu'])->name('delete.menu');

    Route::get('add-event',[EventController::class,'addEvent'])->name('add.event');
    Route::post('save-event',[EventController::class,'saveEvent'])->name('save.event');
    Route::post('delete-event',[EventController::class,'dltEvent'])->name('dlt.event');

    Route::get('add-gallery',[GalleryController::class,'addGallery'])->name('add.gallery');
    Route::post('save-cheifs',[GalleryController::class,'saveCheif'])->name('save.cheifs');
    Route::post('save-gallery',[GalleryController::class,'saveGallery'])->name('save.gallery');

    Route::get('manage-user',[UserController::class,'manageUser'])->name('manage.user');
    Route::get('edit-user/{id}',[UserController::class,'editUser'])->name('edit');
    Route::post('/update-user',[UserController::class,'updateUser'])->name('update.user');


    Route::get('admin-contact',[ContactController::class,'adminContact'])->name('adminContact');
    Route::post('dlt-contact',[ContactController::class,'dltContact'])->name('dlt.contact');
    Route::get('book-table',[TableBookController::class,'adminbooktable'])->name('adminTable');
    Route::post('dlt-booking',[TableBookController::class,'dltBooking'])->name('dlt.booking');
    Route::get('status/{id}',[TableBookController::class,'Status'])->name('status');






});
