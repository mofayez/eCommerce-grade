<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// countries routes
Route::group(['prefix' => 'counties/', 'namespace' => 'API'], function () {

    Route::get('','CountriesController@getAllCountries')->name('countries.getAllCountries');
    Route::get('{id}','CountriesController@getCountry')->name('countries.getCountry');
    Route::post('create','CountriesController@createNewCountry')->name('countries.createNewCountry');
    Route::patch('update/{id}','CountriesController@updateCountry')->name('countries.updateCountry');
    Route::delete('delete/{id}','CountriesController@deleteCountry')->name('countries.deleteCountry');
});



// options routes
Route::group(['prefix' => 'options/', 'namespace' => 'API'], function () {

    Route::get('','OptionsController@getAllOptions')->name('options.getAllOptions');
    Route::get('{id}','OptionsController@getOption')->name('options.getOption');
    Route::post('create','OptionsController@createNewOption')->name('options.createNewOption');
    Route::patch('update/{id}','OptionsController@updateOption')->name('options.updateOption');
    Route::delete('delete/{id}','OptionsController@deleteOption')->name('options.deleteOption');

});


// optionValues routes
Route::group(['prefix' => 'optionValues/', 'namespace' => 'API'], function () {

    Route::get('','OptionValueController@getAllOptionsValues')->name('optionValue.getAllOptionsValues');
    Route::get('{id}','OptionValueController@getOptionValue')->name('optionValue.getOptionValue');
    Route::post('create','OptionValueController@createNewOptionValue')->name('optionValue.createNewOptionValue');
    Route::patch('update/{id}','OptionValueController@updateOptionValue')->name('optionValue.updateOptionValue');
    Route::delete('delete/{id}','OptionValueController@deleteOptionValue')->name('optionValue.deleteOptionValue');

});


// Menus routes
Route::group(['prefix' => 'menus/', 'namespace' => 'API'], function () {

    Route::get('','MenusController@getAllMenus')->name('Menus.getAllMenus');
    Route::get('{id}','MenusController@getMenu')->name('Menus.getMenu');
    Route::post('create','MenusController@createNewMenu')->name('Menus.createNewMenu');
    Route::patch('update/{id}','MenusController@updateMenu')->name('Menus.updateMenu');
    Route::delete('delete/{id}','MenusController@deleteMenu')->name('Menus.deleteMenu');

});