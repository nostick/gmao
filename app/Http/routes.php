<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::resource('equipment','EquipmentController');


    Route::get('/equipment/maintenance/excel/{id}',['as' => 'equipment/maintenance', 'uses' =>'MaintenanceController@excel']);
    Route::resource('equipment/maintenance','MaintenanceController');

    Route::get('/equipment/item/excel/{id}',['as' => 'equipment/item', 'uses' =>'ItemController@excel']);
    Route::resource('equipment/item','ItemController');

    Route::get('/contract_services/excel/{id}',['as' => 'contract_services', 'uses' =>'ContractServiceController@excel']);
    Route::resource('contract_services','ContractServiceController');
});



