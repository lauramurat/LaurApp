<?php
//1
//use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request;
//
//Route::get('/', function (){
//    return "Hello world";
//});
//Route::get('/users', function (){
//    return "users page";
//});
//Route::get('/welcome', function (){
//   return  view ('welcome');
//});
//
//Route::get('/goods', function (Request $req){
//   dd($req);
//});

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function(){
    return redirect()->route('posts.index');
});

Route::resource('posts', PostController::class);
//Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
//Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
//Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
//Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');



