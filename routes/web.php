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

<<<<<<< Updated upstream
Route::get('/', function () {
    return view('welcome');
});
<<<<<<< Updated upstream
=======
<<<<<<< Updated upstream
=======
=======
Route::get('/', 'PostController@index');
Route::resource('posts','PostController');

>>>>>>> Stashed changes
Route::get('/index', function () {
    return view('index');
});

<<<<<<< Updated upstream
=======
Route::get('/posts', function () {
    return view('posts');
});
>>>>>>> Stashed changes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/city-add', function () {
    return view('city-add');
})->name('city-add');
Route::post('/city-add/city-form', 'CityController@submitcity')->name('city-form');
Route::post('/index/search', 'CityController@search')->name('city-search');
<<<<<<< Updated upstream
// Route::any ( '/index/search', function () {
//     $q = Input::get ( 'q' );
//     $city = City::where ( 'name_city', 'LIKE', '%' . $q . '%' )->get ();
//     if (count ( $city ) > 0)
//         return view ( 'index' )->withDetails ( $city )->withQuery ( $q );
//     else
//         return view ( 'index' )->withMessage ( 'No Details found. Try to search again !' );
// } );
=======
>>>>>>> Stashed changes
>>>>>>> Stashed changes
>>>>>>> Stashed changes
