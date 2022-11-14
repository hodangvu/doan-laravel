<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthenController;
use App\Http\Controllers\CreateUserController;
// app\Http\Controllers\Admin


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
  

// Admin 
Route::get('login', [AuthenController::class, 'create'])
                ->name('create');
 
Route::post('create-user', [CreateUserController::class, 'userCreate']);



Route::get('/tuyendung',function(){
    return view('tuyendung');
});
// Route::namespace('Admin')-> prefix('admin')-> name('admin.')->group(function(){
    
//         // Route::get('login','AuthenticatedSessionController@create')->name('login');
//         // Route::get('login', [AuthenticatedSessionController::class, 'login'])
//         //         ->name('login');
//     });
//Route::namespace('Auth')-> group(function(){
//});

