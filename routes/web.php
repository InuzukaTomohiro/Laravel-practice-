<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\DiceController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\JsonResponseController;
use App\Http\Controllers\ArticlePayloadActionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('home');
});
// 新規登録
Route::get('/register', [RegisterController::class, 'create'])
  ->middleware('guest')
  ->name('register');
Route::post('/register', [RegisterController::class, 'store'])
  ->middleware('guest');
// ログイン
Route::get('/login', [LoginController::class, 'index'])
  ->middleware('guest')
  ->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])
  ->middleware('guest');
// ログアウト
Route::get('/logout', [LoginController::class, 'logout'])
  ->middleware('auth')
  ->name('logout');
// ユーザ関連
Route::get('/users', [UserController::class, 'index'])           ->name('user.index');
Route::get('/user/{id}', [UserController::class, 'show'])        ->name('user.show');
Route::get('user/{id}/edit', [UserController::class, 'edit'])    ->name('user.edit');
Route::patch('user/{id}/edit', [UserController::class, 'update'])->name('user.update');

// 投稿関連
Route::get('/post/create', [PostController::class, 'create'])
  ->name('post.create');
Route::post('/post/store', [PostController::class, 'store'])
  ->name('post.store');
Route::get('/posts', [PostController::class, 'index'])
  ->name('post.index');
Route::get('/post/{post}', [PostController::class, 'show'])
  ->name('post.show')
  ->where('post', '[0-9]+');
Route::get('/post/{post}/edit', [PostController::class, 'edit'])
  ->name('post.edit')
 ->where('post', '[0-9]+');
Route::patch('/post/{post}/update', [PostController::class, 'update'])
  ->name('post.update')
  ->where('post', '[0-9]+');
Route::delete('/post/{post}/destroy', [PostController::class, 'destroy'])
  ->name('post.destroy')
  ->where('post', '[0-9]+');

Route::get('/hello/index', [HelloController::class, 'index'])
  ->name('hello');

Route::get('/dice', [DiceController::class, 'rollDouble'])
  ->name('dice');

Route::get('/search', [SearchController::class, 'index'])
  ->name('search');

Route::get('/json-response', [JsonResponseController::class])->name('json_response');

Route::get('/payload', [ArticlePayloadAction::class]);