<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
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

Route::view('/', 'home', ['posts' => Post::latest()->where(['status' => '1'])->take(3)->get()])->name('home');

Route::view('/privacy-policy', 'post', ['post' => Post::get()->where('title', 'Privacy Policy')->first()])->name('privacy-policy');

Route::resource('posts', PostController::class)->only([
    'index', 'show'
]);

Route::get('/dashboard', function() {
    return redirect()->route('admin.dashboard');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', function() {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::put('posts/update-status/{post}', [AdminPostController::class, 'updateStatus'])->name('posts.update-status');
    Route::resource('posts', AdminPostController::class)->except([
        'show'
    ]);
});

require __DIR__.'/auth.php';
