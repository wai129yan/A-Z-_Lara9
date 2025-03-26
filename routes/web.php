<?php

use App\Http\Controllers\TodoController;
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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/content', function () {
    return view('content');
});

Route::get('/todos',[TodoController::class,'index'])->name('todos.index');
Route::get('/todos/create',[TodoController::class,'create'])->name('todos.create');

















































Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts', function(){
    return 'this is our posts page';
});


Route::get('/posts/{id}/back', function($id){
    return 'this is post number ' . $id. ' back page';
});

Route::get('/user/{name}',function(string $name){
    return 'this is user ' . $name;
})-> where('name','[a-zA-Z]+');

Route::get('/user/{id}/{name}',function(int $id,string $name){
    return 'this is user ' . $name . ' with id ' . $id;
})->where(['id'=>'[0-9]+','name' => '[a-zA-Z]+']);


Route::get('/service/{name}/{id}',function(string $name,int $id){
    return 'this is service ' . $name . ' with id ' . $id;
})->where(['id'=>'[0-9]+','name' => '[a-zA-Z]+']);

Route::get('/url/{id}/{name}',function(int $id,string $name){
    return 'this is url ' . $name . ' with id ' . $id;
})->whereNumber('id')->whereAlpha('name');

Route::get('/url/{name}/{id}',function(string $name,int $id){
    return 'this is url ' . $name . ' with id ' . $id;
})->whereAlpha('name')->whereNumber('id');

Route::get('/category/{category}',function(string $category){
    return 'this is category ' . $category;
})->whereIn('category',['php','laravel','js']);

Route::get('/search/{search}',function(string $search){
    return $search;
})->where('search','.*');



Route::get('/name/profile',function(){
    return view('profile');
})->name('profile');





