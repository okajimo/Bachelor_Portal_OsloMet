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

Route::get('/', 'PagesController@Index');
Route::get('/kontakt_info', 'PagesController@kontakt_info');
Route::get('/prosjektforslag', 'PagesController@prosjektforslag');
Route::get('/tidligere_prosjekter', 'PagesController@tidligere_prosjekter');
Route::get('/grupper', 'PagesController@grupper');

Route::get('/informasjon', 'PagesController@informasjon');
    Route::get('/studenter', 'PagesController@studenter');
        Route::get('/statusrapport', 'PagesController@statusrapport');
        Route::get('/dokumentasjon', 'PagesController@studenter');
        Route::get('/prosjektskisse', 'PagesController@prosjektskisse');
        Route::get('/veiledning', 'PagesController@veiledning');
        Route::get('/forprosjekt', 'PagesController@forprosjekt');
        Route::get('/prosjektrapport', 'PagesController@prosjektrapport');
        Route::get('/evaluering', 'PagesController@evaluering');