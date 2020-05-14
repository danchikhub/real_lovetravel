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
});

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

Route::get('/city-add', function () {
    return view('city-add');
})->name('city-add');
Route::post('/city-add/city-form', 'CityController@submitcity')->name('city-form');
Route::post('/index/search', 'CityController@search')->name('city-search');
// Route::any ( '/index/search', function () {
//     $q = Input::get ( 'q' );
//     $city = City::where ( 'name_city', 'LIKE', '%' . $q . '%' )->get ();
//     if (count ( $city ) > 0)
//         return view ( 'index' )->withDetails ( $city )->withQuery ( $q );
//     else
//         return view ( 'index' )->withMessage ( 'No Details found. Try to search again !' );
// } );