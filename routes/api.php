<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CustomerController;
use App\Http\Controllers\api\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customers',[CustomerController::class, 'index'])->name('customers');

Route::post('/categories',[CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories',[CategoryController::class, 'index'])->name('categories');
Route::delete('/categories/{category}',[CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/{category}',[CategoryController::class, 'show'])->name('categories.show');
Route::put('/categories/{category}',[CategoryController::class, 'update'])->name('categories.update');