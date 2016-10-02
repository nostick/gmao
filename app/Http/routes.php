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
    Route::get('/equipment/maintenance/createBase/{id}',['as' => 'equipment/maintenance', 'uses' =>'MaintenanceController@createBase']);
    Route::resource('equipment/maintenance'    ,'MaintenanceController');

    Route::get('/equipment/item/excel/{id}'    ,['as' => 'equipment/item', 'uses' =>'ItemController@excel']);
    Route::resource('equipment/item'           ,'ItemController');

    Route::get('/contract_services/excel/{id}' ,['as' => 'contract_services', 'uses' =>'ContractServiceController@excel']);
    Route::resource('contract_services'        ,'ContractServiceController');

    Route::post('changeSystem'                 ,'RegisterController@changeSystem')->name('register.change.system');
    Route::post('changeSubSystem'              ,'RegisterController@changeSubSystem')->name('register.change.subsystem');
    Route::post('searchBySystem'               ,'RegisterController@searchBySystem')->name('register.search.bysystem');
    Route::post('searchBySubSystem'            ,'RegisterController@searchBySubSystem')->name('register.search.bysubsystem');
    Route::post('searchFaults'                 ,'RegisterController@searchFaults')->name('register.search.faults');
    Route::post('searchFinishTableData'        ,'RegisterController@fillTable')->name('register.fill.table');
    Route::get('register/corrective'           ,'RegisterController@RegisterCorrective')->name('register.corrective');
    Route::get('register/preventive'           ,'RegisterController@RegisterPreventive')->name('register.preventive');
    Route::get('register/faults'               ,'RegisterController@RegisterFaults')->name('register.faults');
    Route::post('register/corrective/store'    ,'RegisterController@StoreCorrective')->name('register.corrective.store');
    Route::post('register/preventive/store'    ,'RegisterController@StorePreventive')->name('register.preventive.store');
    Route::post('register/faults/store'        ,'RegisterController@StoreFaults')->name('register.fault.store');
    Route::get('register/finish'               ,'RegisterController@RegisterFinish')->name('register.finish');
    Route::post('register/confirmFinish'        ,'RegisterController@ConfirmFinish')->name('register.confirm.finish');
    Route::resource('register'                 ,'RegisterController');

});



