<?php

use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\PostController as DashboardPostController;
use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::view('/', 'home', ['posts' => Post::latest()->take(3)->get()])->name('home');

Route::view('/privacy-policy', 'post', ['post' => Post::get()->where('title', 'Privacy Policy')->first()])->name('privacy-policy');

Route::resource('posts', PostController::class)->only([
    'index', 'show'
]);

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function() {
    Route::resource('posts', DashboardPostController::class)->except([
        'show'
    ]);
});

require __DIR__.'/auth.php';
