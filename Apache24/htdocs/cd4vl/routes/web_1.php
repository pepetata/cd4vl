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

Route::get('locale', function () {
    return \App::getLocale();
});

Route::get('locale/{locale}', function ($locale) {
   echo 'location = '.$locale."\r\n";
   App::setLocale($locale);
   \Session::put('locale', $locale);
   echo \App::getLocale();
    return redirect()->back();
});
Route::get('/', 'PagesController@welcome');
Route::get('{locale}/', 'PagesController@index');
Route::get('{locale}/index.php', 'PagesController@index');
Route::get('{locale}/endereco', 'PagesController@endereco');
Route::get('{locale}/dv', 'PagesController@dv');
Route::get('{locale}/configurar', 'PagesController@configurar');
//Route::get('/acessandodb/{page}', 'PagesController@acessandodb');
Route::get('{locale}/acessandodb', 'PagesController@acessandodb');

Route::get('{locale}/copyFromVL', 'LocationController@copyFromVL');
Route::get('{locale}/getAisles', 'LocationController@getAisles');
Route::get('{locale}/getLocs', 'LocationController@getLocs');
Route::get('{locale}/updateData', 'LocationController@updateData');
Route::get('{locale}/updateLocation', 'LocationController@updateLocation');
Route::post('{locale}/importCSV', 'LocationController@importCSV');

Route::get('{locale}/generateDV', 'DVController@generateDV');
Route::get('{locale}/updateVL', 'DVController@updateVL');
Route::get('{locale}/updateVLToday', 'DVController@updateVLToday');
Route::get('{locale}/printDVSel', 'DVController@printDVSel');

Route::get('{locale}/saveConf', 'EnvController@saveConf');

Route::fallback(function ($request) {
    var_dump($request);
});

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/endereco', function () {
//    return view('endereco');
//});
//
//
//Route::get('/dv', function () {
//    return view('dv');
//});
