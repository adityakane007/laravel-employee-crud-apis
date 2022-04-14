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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::prefix('employee')->name('employee.')->group(function () {
//     Route::get('/view', [EmployeeController::class, 'view'])->name('view');
//     Route::post('/add', [EmployeeController::class, 'add'])->name('add');
    
// });


Route::resource('employees','App\Http\Controllers\EmployeeController');

