<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DeviceController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ReservationListController;
use App\Http\Controllers\Admin\UsersController;

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function() {


    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::resource('/devices', DeviceController::class);
    Route::resource('/reservations', ReservationController::class);
    
    
    Route::resource('/users', UsersController::class);
 
    
});





require __DIR__.'/auth.php';
