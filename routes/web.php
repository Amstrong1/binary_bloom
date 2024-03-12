<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsletterSubscriberController;

use App\Models\Article;
use App\Models\Category;

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

Route::get('/migrate', function () {
    Artisan::call('migrate');
    dd('migrated!');
});

Route::get('reboot', function () {
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    dd('All done!');
});


Route::middleware('localisation')->group(function () {

    Route::get('', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('blog', function () {
        $posts = Article::all();
        $categories = Category::all();
        return view('blog', compact('posts', 'categories'));
    })->name('blog');

    Route::post('contact-us', [ContactController::class, 'store'])->name('contact.store');
    Route::post('subscribe', [NewsletterSubscriberController::class, 'store'])->name('subscribe');

    Route::post('language', function () {
        Session::put('locale', request()->lang);
        return back();
    })->name('language');

    Route::get('dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::resource('category', CategoryController::class);
        Route::resource('author', AuthorController::class);
        Route::resource('article', ArticleController::class);
        Route::resource('comment', CommentController::class);
        Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__ . '/auth.php';
