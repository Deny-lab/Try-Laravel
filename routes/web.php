<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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
    return view('home', [
        'title' => 'Home',
    ]);
});


Route::get('/post', [PostController::class, 'index']);


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Deny Febriawan",
        "email" => "denyfebriawan@gmail.com",
    ]);
});

Route::get('/post/{content:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('post', [
        'title' => "Post by Category : $category->name ",
        'posts' => $category->post,
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('post', [
        'title' => "Post by Author : $author->name",
        'posts' => $author->post->load('category', 'user'),
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function () {
    return view('/dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('is_admin');

// Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
