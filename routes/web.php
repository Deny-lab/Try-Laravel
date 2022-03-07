<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;

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
    return view('Category', [
        'title' => $category->name,
        'post' => $category->post,
        'category' => $category->name
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('post', [
        'title' => 'User Post',
         'posts' => $author->post
    ]);
});
