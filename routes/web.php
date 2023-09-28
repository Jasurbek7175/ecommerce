<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryProductController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\FavoriteController;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);

Route::get('user', [AuthController::class, 'user'])->middleware('auth:sanctum');

Route::apiResources([
    'categories' => CategoryController::class,
    'categories.products' => CategoryProductController::class,
    'favorites' => FavoriteController::class,
    'products' => ProductController::class,

]);

