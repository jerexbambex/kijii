<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactUsController;
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
    return view('landing');
});

Route::get('about-us', [AboutController::class, 'index'])->name('about');

Route::get('contact-us', [ContactUsController::class, 'index'])->name('contactUs');
Route::post('contact-us', [ContactUsController::class, 'store'])->name('contactUs.send');

Route::get('blogs', [BlogController::class, 'index'])->name('blogIndex');

Route::get('blogs/{post}', function($slug) {
    $path =  __DIR__ . "/../resources/posts/{$slug}.html";

    if (! file_exists($path)) {
        return redirect('/');
    }

    $post = file_get_contents($path);

    return view('blogs.show', compact('post'));
})->name('blogShow');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
