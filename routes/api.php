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
// Route::group(['middleware' => 'auth:api'], function () {
//   Route::get('/', function(){
//     return "hello";
//   });
//   Route::get('/user', function (Request $request) {
//       return $request->user();
//   });
// });
Route::post('/register','UserController@register');
Route::group(['middleware' => 'auth:api'], function () {
  Route::get('/list','TodoController@index');
  Route::post('/insert','TodoController@insert');
  Route::post('/insertall','TodoController@insertall');
  Route::post('/update/{id}','TodoController@update');
  Route::post('/delete/{id}','TodoController@delete');
});
