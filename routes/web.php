<?php

use Illuminate\Support\Facades\Route;
// ******************* frontendcontroller*******************
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ====================start for fronend===============
Route::get('/', [FrontEndController::class,'index']);
Route::get('newwebsite', [FrontEndController::class,'website_creation']);
Route::get('join-now', [FrontEndController::class,'join_now']);
Route::get('frontend', [FrontEndController::class,'frontend']);
Route::get('backend', [FrontEndController::class,'backend']);
Route::get('fullstack', [FrontEndController::class,'fullstack']);
Route::get('laravel', [FrontEndController::class,'laravel']);
Route::get('new-website', [FrontEndController::class,'NewWebsite']);
Route::get('e-commerce', [FrontEndController::class,'Ecommerce']);
Route::get('school', [FrontEndController::class,'School']);
Route::get('web-maintaine', [FrontEndController::class,'WebMaintaine']);
Route::get('amethi-tech', [FrontEndController::class,'AmethiTech']);
Route::post('send-mail', [FrontEndController::class,'SendMail']);
Route::post('storenow', [FrontEndController::class,'StoreNow']);

Route::get('clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('optimize:clear');
    Artisan::call('clear-compiled');
    return view('404');
});
Route::fallback(function () {
    return view('404');
});
