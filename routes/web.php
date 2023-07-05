<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'ArticlesController@index')->name('index');

Auth::routes();
Route::post('/profile', 'ProfileController@profile');
Route::get('/profile', function () {
    return view('home.profile');
});

Route::get('/about', function () {
    return view('home.about');

});


Route::get('/blog', 'BlogController@blog');
Route::post('/blog', 'BlogController@deleteBlog');

Route::post('/createArticle', 'createArticleController@create');
// Route::get('/createArticle', function () {
//     return view('home.createArticle');
// });

Route::get('/createArticle', 'createArticleController@createView');

Route::get('/deleteUser1/{id}', 'deleteUserController@deleteUser')->name('deleteUser1');
Route::get('/deleteUser', 'deleteUserController@viewDelete');
