<?php

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

require __DIR__ . '/auth.php';

// ADMIN
Route::middleware(['auth', 'verified'])->prefix('panel/admin')->group(function () {
    Route::resource('dashboard', App\Http\Controllers\Admin\DashboardController::class);
    
    Route::resource('villa', App\Http\Controllers\Admin\VillaController::class);
    Route::resource('villa-setting', App\Http\Controllers\Admin\VillaSettingController::class);
    Route::resource('villa-feature', App\Http\Controllers\Admin\VillaFeatureController::class);
    Route::resource('villa-image', App\Http\Controllers\Admin\VillaImageController::class);
    Route::resource('feature', App\Http\Controllers\Admin\FeatureController::class);

    Route::resource('experience', App\Http\Controllers\Admin\ExperienceController::class);
    Route::resource('experience-setting', App\Http\Controllers\Admin\ExperienceSettingController::class);
    Route::resource('experience-image', App\Http\Controllers\Admin\ExperienceImageController::class);
});


Route::get('/nandini', function () {
    return view('welcome');
})->domain('nandini.' . env('APP_URL'));