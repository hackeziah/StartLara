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

Route::get('/', function () {
    return view('index');
});

// Route::get('/contacts', function () {
//     return view('contacts');
// });

// Route::get('/contacts', function () {
//     return view('pages.contacts');
// });

// Route::get('/about', 'PagesController@about');
// Route::get('/contacts', 'PagesController@contacts');
// Route::get('/posts/create', 'PostsController@create');
// Route::post('/posts/store', 'PostsController@store');
// Route::get('/posts/edit/{$id?}', 'PostsController@edit');


// Route::resource('/posts', 'PostsController');
