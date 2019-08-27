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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
//


// Route::group(['middleware' => 'auth:api'], function(){

  /**************************************** Customer Part ************************************/
  // get customer data
  Route::get('/client/{id}', function($id) {
    return \App\Client::find($id);
  });
  // get all customers
  Route::get('/clients', function() {
    return \App\Client::all();
  });
  // add new customer
  Route::post('/client', 'ClientController@store');
  /**************************************** Customer Part ************************************/

  /************************************ Product part *****************************************/
  //get product
  Route::get('/product/{id}', function($id) {
    return \App\Product::find($id);
  });
  // get all products
  Route::get('/products', function() {
    return \App\Product::all();
  });
  // add new product
  Route::post('/product', 'ProductController@store');
  /************************************ Product part *****************************************/


  /************************************ Dept part *****************************************/
  Route::get('/dept/{id}', function($id) {
    return \App\Dept::find($id);
  });
  // get all depts
  Route::get('/depts', function() {
    return \App\Dept::all();
  });
  // add dept to user
  Route::post('/dept', 'DeptController@store');
  // update dept
  Route::post('/dept/{id}', 'DeptController@update');
  /************************************ Dept part *****************************************/


  /************************************ Dept Operation part *****************************************/
  // get all operation of user
  Route::get('/deptoperation', 'DeptOperationController@getUserDeptOperation');
  // add new operation
  Route::post('/deptoperation', 'DeptOperationController@store');
  // update operation
  Route::post('/update/deptoperation/{id}', 'DeptOperationController@update');  // TODO
  // delete operation
  Route::post('/delete/deptoperation/{id}', 'DeptOperationController@delete');  // TODO

  /************************************ Dept Operation part *****************************************/

  /************************************ Bill part *****************************************/
  // get Bill
  Route::get('/bill/{id}', function($id){
    return \App\Bill::find($id);
  });
  // get all bills
  Route::get('/bills', function(){
      return \App\Bill::all();
  });
  // get bills of user
  Route::get('/customerbills', 'BillController@getCustomerBill');
  // add new bill
  Route::post('/bill', 'BillController@store');

  /************************************ Bill part *****************************************/


  /************************************ order part *****************************************/
  // get order
  Route::get('/order/{id}', function($id){
    return \App\Order::find($id);
  });

  // get orders of user
  Route::get('/customerorders', 'OrderController@getCustomerOrder');
  // add new order
  Route::post('/order', 'OrderController@store');

  /************************************ order part *****************************************/


// });
