<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\VitrineController;
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

Auth::routes();

// Route::get('/home',[VitrineController::class,'index']);
// Route::get('/', function(){
//     return view('Article_views.index');
// });
//                      back end                                       //
//######################## routes for article ######################## //
// Route::get('/', [ArticleController::class,'index']);
Route::get('admin',[ArticleController::class,'index']);
Route::get('article/create',[ArticleController::class,'create']);
Route::post('article/store',[ArticleController::class,'store']);
Route::get('article/{id}/edit',[ArticleController::class,'edit']);
Route::post('article/{id}',[ArticleController::class,'update']);
Route::get('article/{id}',[ArticleController::class,'destroy']);
Route::get('detailsA/{id}',[ArticleController::class,'visualiser']);
//######################## routes for categorie ######################## //
// Route::get('/', [CategorieController::class,'index']);
Route::get('categorie',[CategorieController::class,'index']);
Route::get('categorie/create',[CategorieController::class,'create']);
Route::get('categorie/store',[CategorieController::class,'store']);
Route::get('categorie/{id}/edit',[CategorieController::class,'edit']);
Route::post('categorie/{id}',[CategorieController::class,'update']); 
Route::get('categorie/{id}',[CategorieController::class,'destroy']);
Route::get('details/{id}',[CategorieController::class,'visualiser']);


//front end
Route::get('first',[VitrineController::class,'index']);
Route::get('/',[VitrineController::class,'index']);
Route::post('/',[VitrineController::class,'index']);
Route::get('first/article/{id}',[VitrineController::class,'show']);
Route::get('first/{id}',[VitrineController::class,'categorie']);

Route::get('/verify',[VitrineController::class,'verify']);


