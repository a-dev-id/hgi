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

Route::get('/hgob', function () {
    return view('front.index');
});

Route::resource('/pjv', App\Http\Controllers\Pjv\HomeController::class);

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

    Route::resource('spa', App\Http\Controllers\Admin\SpaController::class);
    Route::resource('spa-setting', App\Http\Controllers\Admin\SpaSettingController::class);
    Route::resource('spa-image', App\Http\Controllers\Admin\SpaImageController::class);

    Route::resource('restaurant', App\Http\Controllers\Admin\RestaurantController::class);
    Route::resource('restaurant-setting', App\Http\Controllers\Admin\RestaurantSettingController::class);
    Route::resource('restaurant-image', App\Http\Controllers\Admin\RestaurantImageController::class);

    Route::resource('wedding', App\Http\Controllers\Admin\WeddingController::class);
    Route::resource('wedding-setting', App\Http\Controllers\Admin\WeddingSettingController::class);

    Route::resource('gallery', App\Http\Controllers\Admin\GalleryController::class);
    Route::resource('gallery-setting', App\Http\Controllers\Admin\GallerySettingController::class);
    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);

    Route::resource('contact-us', App\Http\Controllers\Admin\ContactUsSettingController::class);

    Route::resource('page', App\Http\Controllers\Admin\PageController::class);

    Route::resource('award', App\Http\Controllers\Admin\AwardController::class);
    Route::resource('award-setting', App\Http\Controllers\Admin\AwardSettingController::class);

    Route::resource('press-room', App\Http\Controllers\Admin\PressRoomController::class);
    Route::resource('press-room-setting', App\Http\Controllers\Admin\PressRoomSettingController::class);

    Route::resource('career', App\Http\Controllers\Admin\CareerController::class);
    Route::resource('career-setting', App\Http\Controllers\Admin\CareerSettingController::class);

    Route::resource('blog', App\Http\Controllers\Admin\BlogController::class);
    Route::resource('blog-setting', App\Http\Controllers\Admin\BlogSettingController::class);
});