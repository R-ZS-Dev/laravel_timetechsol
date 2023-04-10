<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'index_page')->name('index_page');
    Route::get('blogs', 'blog_page')->name('blog_page');
    Route::get('blog/{slug}', 'blog_detail_page')->name('blog_detail_page');
});
