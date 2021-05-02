<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LaravelController;

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
    return view('welcome');
});



Route::get('/hello', [PagesController::class, "helloPage"]);
Route::get('/todos', [PagesController::class, "todosPage"]);
Route::get('/todos/done', [PagesController::class, "todosDone"]);
Route::get('/todos/not-done', [PagesController::class, "todosNotDone"]);
Route::get('/laravel', [LaravelController::class, "laravelPage"]);


Route::get('/first-page', function (){
    return "<h1 style='font-family: Arial;'>This is my first page in Laravel</h1>";
});

Route::get('/post/{id}', function ($id){
    return "Post ID - $id";
});

/*Route::get('hello', function (){
    return view('hello', [
        'name' => 'Nikolay',
        'lastName' => 'Old',
        'skills' => ['HTML5', 'CSS3', 'VUE.js', 'laravel']
    ]);
    // view -> $name => Nikolay, $lastName => Old
});*/

/*Route::get('test', function (){
    return view('test');
});*/

/*Route::get('/laravel', function (){
    return view('laravel', [
        'laravel' => [
            "Laravel Jetstream",
            "Models Directory",
            "Model Factory Classes"
        ]

    ]);
});*/


