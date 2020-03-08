<?php

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


Route::get('/', function(){
    
    return view('welcome');
});

Route::get('/about', function(){
    
    
    return view('about', [
        
        // fetching the articles
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index')->name('article.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('article.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');






                        /*  ---- Deprecated  Code ----*/



    // Line : 14 
    // ---------

//Route::get('/posts/{slug}', 'PostsController@show');

/* --- Not a good practice ---- */

    // Line : 22 
    // ---------

//        'post' => $posts[$post] ?? 'sorry, but the post is not found!'