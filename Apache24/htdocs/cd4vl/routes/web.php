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
//Route::get('/', 'PagesController@index');
Route::get('/index.php', 'PagesController@index');
Route::get('/endereco', 'PagesController@endereco');
Route::get('/dv', 'PagesController@dv');
Route::get('/configurar', 'PagesController@configurar');
//Route::get('/acessandodb/{page}', 'PagesController@acessandodb');
Route::get('/acessandodb', 'PagesController@acessandodb');

Route::get('/copyFromVL', 'LocationController@copyFromVL');
Route::get('/getAisles', 'LocationController@getAisles');
Route::get('/getLocs', 'LocationController@getLocs');
Route::get('/updateData', 'LocationController@updateData');
Route::get('/updateLocation', 'LocationController@updateLocation');
Route::post('/copyFromVLFix', 'LocationController@copyFromVLFix');
Route::post('/copyFromVLCSV', 'LocationController@copyFromVLCSV');

Route::get('/generateDV', 'DVController@generateDV');
Route::get('/updateVL', 'DVController@updateVL');
Route::get('/updateVLToday', 'DVController@updateVLToday');
Route::get('/printDVSel', 'DVController@printDVSel');
Route::get('/printDVToday', 'DVController@printDVToday');

Route::get('/saveConf', 'EnvController@saveConf');

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
