<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'AboutController@index');
Route::get('/work-order-request', 'workOrders\RequestWorkOrderController@index');
Route::get('/list-work-orders', 'workOrders\ListWorkOrdersController@index');
Route::get('/list-work-orders-for-property/{id}', 'workOrders\ListWorkOrdersController@listForProperty');
Route::get('/view-work-order/{id}', 'workOrders\ViewWorkOrderController@index');
Route::get('/create-work-order/{property}', 'workOrders\AddWorkOrderController@index');
Route::post('/store-work-order/{property}', 'workOrders\AddWorkOrderController@store');
Route::get('/delete-work-order/{workOrder}', 'workOrders\DeleteWorkOrderController@index');
Route::get('/edit-work-order/{workOrder}', 'workOrders\EditWorkOrderController@index');
Route::patch('/update-work-order/{workOrder}', 'workOrders\EditWorkOrderController@update');

Route::get('/list-properties', 'properties\ListPropertiesController@index');
Route::get('/view-property/{id}', 'properties\ViewPropertyController@index');
Route::get('/add-property', 'properties\AddPropertyController@index');
Route::post('/add-new-property', 'properties\AddPropertyController@add');
Route::get('/edit-property/{property}', 'properties\EditPropertyController@index');
Route::patch('/update-property/{property}', 'properties\EditPropertyController@update');

Route::post('/add-work-order-comment/work-order/{id}', 'workOrders\AddCommentController@add');
Route::get('/edit-work-order-comment/{comment}', 'workOrders\EditCommentController@index');
Route::patch('/add-work-order-comment/{comment}', 'workOrders\EditCommentController@update');