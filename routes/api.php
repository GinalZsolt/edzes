<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdzesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// GET ALL products 
Route::get('/trainings', function(){
    return Training::all();
});

// GET One Product by ID
Route::get('/trainings/{id}', function(String $id){
    return Training::find($id);
});

// Insert product
Route::post('/upload',[EdzesController::class,"store"]);

// Update product by ID
Route::patch('/training/{id}',[EdzesController::class,"update"]);


// DELETE product by ID
Route::delete('/training/{id}',[EdzesController::class,'destroy']);

// DELETE all products
Route::delete('/trainings', function(){
    return Training::whereNotNull('id')->delete();
});