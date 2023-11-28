<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlluserController;
use App\Http\Controllers;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\SublistcategoryController;
use App\Models\subcategory;

use Illuminate\Routing\Route as RoutingRoute;

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
//     return view('welcome');
// });

Route::get('/', [AlluserController::class, 'index'])->name('index');
Route::get('admin', [AlluserController::class, 'login'])->name('admin.login');
Route::get('logout', [AlluserController::class, 'logout'])->name('admin.logout');
Route::post('adminlogin', [AlluserController::class, 'adminlogin'])->name('admin.adminlogin');
Route::get('dashbord', [AlluserController::class, 'dashbord'])->name('admin.dashbord');



Route::get('dashbord/category', [AlluserController::class, 'category'])->name('admin.category');
Route::post('addcategory', [CategoryController::class,'store'])->name('admin.addcategory');
Route::get('dashbord/subcategory', [AlluserController::class, 'subcategory'])->name('admin.subcategory');
Route::post('addsubcategory', [SubcategoryController::class,'store'])->name('admin.addsubcategory');
Route::get('dashbord/sublistcategory', [AlluserController::class, 'sublistcategory'])->name('admin.sublistcategory');
Route::post('addsublistcategory', [SublistcategoryController::class,'store'])->name('admin.addsublistcategory');
Route::get('dashbord/product', [AlluserController::class, 'product'])->name('admin.product');
Route::post('addproduct', [ProductController::class,'store'])->name('admin.addproduct');

// Route::get('productdetails', [ProductController::class, 'show'])->name('productdetails');
Route::get('productdetails/{id?}', [ProductController::class, 'show'])->name('productdetails');
Route::get('productdetails', [ProductController::class, 'show'])->name('productdetails');
Route::get('categoryview/{name?}', [ProductController::class, 'categoryview'])->name('categoryview');
Route::get('categoryview/{name1?}/{name?}', [ProductController::class, 'subcategoryview'])->name('subcategoryview');
Route::get('buy/{name?}', [ProductController::class, 'buyproduct'])->name('buyproduct');











