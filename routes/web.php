<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RubricController;
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

//greatRoute::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
//Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/resume', [PageController::class, 'resume'])->name('resume');
//Route::get('/send', [PageController::class, 'send'])->name('send');
Route::match(['get','post'], '/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/page/{slug}', [PageController::class, 'show']);
Route::get('/register', [\App\Http\Controllers\UserController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [\App\Http\Controllers\UserController::class, 'store'])->name('register.store')->middleware('guest');
Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginForm'])->name('loginForm')->middleware('guest');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout')->middleware('auth');



//Route::resource('/posts', PostController::class);
//Route::resource('/posts/create', [PostController::class,'edit']);


Route::fallback(function(){
//   return redirect()->route('home');
    abort('404', 'Oops. Page not found');

});

//Route::group(['middleware'=>'admin', 'prefix'=>'admin', 'namespace'=>'Admin'], function(){
//    Route::get('/home', ['AdminController@index'])->name('home');
//    Route::get('/posts', [AdminController::class, 'posts'])->name('posts');
//    Route::post('/posts', [AdminController::class, 'store'])->name('store');
//    Route::get('/create', [AdminController::class, 'create'])->name('create');
//});
//
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function(){
    Route::get('/home',     [AdminController::class, 'index'])->name('home');
    Route::get('/posts',    [AdminController::class, 'posts'])->name('posts');
    Route::post('/posts',   [AdminController::class, 'store'])->name('store');
    Route::get('/create',   [AdminController::class, 'create'])->name('create');
    Route::get('/profile',  [AdminController::class, 'profile'])->name('profile');
    Route::get('/rubric',   [RubricController::class, 'index'])->name('rubric');
    Route::get('/addrubric',[RubricController::class, 'create'])->name('addrubric');
    Route::post('/rubric',   [RubricController::class, 'store'])->name('rubricstore');


//    Route::get('post/create', function (){
//        Return 'Posts Create';
//    });
//
//    Route::get('post/{id}/edit', function ($id){
//        Return "Post $id edit";
//    })->name('post');

});


//Route::get('/home', function(){
//    $res=2+5;
//    $var='John';
//    return view('home', compact('res','var'));
//})->name('home');
//
//Route::any('/contact',function(){
//    if (!empty($_POST)){
//        dump($_POST);
//    }
//    return view('contact');
//})->name('contact');
//
//Route::get('/post/{id}', function($id) {
//   return "Post $id";
//})->name('post');
//
//Route::get('/post/{id}/{slug?}', function($id, $slug=null) {
//    return "Post $id | $slug";
//});
//
//





