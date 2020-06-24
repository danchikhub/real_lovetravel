<?php

use App\Models\City;
use Illuminate\Support\Facades\Input;
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
Route::get('/index', function () {
    return view('index');
})->name('index');
// Route::get('/city-show/{id_city}','CityController@cityShow');

//тестовая для метки яндекс карты
Route::get('/maps', function () {
    return view('maps');
});

//тестовая для метки яндекс карты
Route::get('/placemark', function ($id) {
	$city_placemark = DB::table('city')->get();
    return view('placemark', compact('city_placemark'));
});

//страница отображения всех мест
Route::get('/allcities', function () {
	$cities = DB::table('city')->get();
    return view('allcities', compact('cities'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/city-test', 'CityController@cityShow')->name('showCity');
Route::get('/city-test/{id_city}', 'CityController@cityShow')->name('showCity');
Route::get('/city-add', function () {
    return view('city-add');
})->name('city-add');
Route::post('/city-add/city-form', 'CityController@submitcity')->name('city-form');
Route::post('/index/search', 'CityController@search')->name('city-search');
Route::get('/all-cities', 'CityController@allcity')->name('city-data');
Route::get('/all-cities/{id_city}/update', 'CityController@updateCity')->name('city-update');
Route::post('/all-cities/{id_city}/update', 'CityController@updateCitySubmit')->name('city-update-submit');
Route::get('/all-cities/{id_city}', 'CityController@OneCity')->name('city-data-one');
Route::get('/all-cities/{id_city}/delete', 'CityController@deleteCity')->name('city-delete');


Route::get('/post-add', 'PostController@create');
Route::post('/city-add/post-form', 'PostController@submitpost')->name('post-form');
Route::get('/city-test', 'PostController@index');
Route::get('/all-posts', 'PostController@allData')->name('post-data');
Route::get('/all-posts/{id_post}', 'PostController@showOnePost')->name('post-data-one');
Route::get('/all-posts/{id_post}/update', 'PostController@updatePost')->name('post-update');
Route::post('/all-posts/{id_post}/update', 'PostController@updatePostSubmit')->name('post-update-submit');
Route::get('/all-posts/{id_post}/delete', 'PostController@deletePost')->name('post-delete');

Route::get('/all-posts/{id_post}/placemark', 'PostController@postPlacemark')->name('post-placemark');
