<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/trainings', function(Request $request){
    $data = ["name"=>$request->name, "duration"=>$request->duration];
    return Training::insert($data);
});

// Update product by ID
Route::patch('/trainings/{id}', function(Request $request, String $id){
    $data = ["name"=>$request->name, "duration"=>$request->duration];
    return Training::where('id', $id)->update($data);
});

// DELETE product by ID
Route::delete('/trainings/{id}', function(String $id){
    return Training::where('id', $id)->delete();
});

// DELETE all products
Route::delete('/trainings', function(){
    return Training::whereNotNull('id')->delete();
});