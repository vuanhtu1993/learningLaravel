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

Route::get('/', function () {
    return view('welcome');
});
Route::get('route1',['as'=>'Myroute',function(){
    echo 'xin chao cac bans';
}]);
Route::get('route2',function (){
  echo 'day la route 2';
})->name('myroute2');
Route::get('goiten',function (){
   return redirect()->route('myroute2');
});
// call controller
Route::get('callcontroler','mycontroller@XinChao');
Route::get('parameter/{ten}','mycontroller@Course');
Route::get('request','mycontroller@getURL');

Route::get('getForm',function (){
    return view('postForm');
});
Route::post('postForm',['as'=>'postForm','uses'=>'mycontroller@postForm']);

/*Cookies*/
Route::get('setCookie','mycontroller@setCookie');
Route::get('getCookie','mycontroller@getCookie');

/**
 * UPLOAD FILE USED REQUEST
 */
Route::get('uploadFile',function (){
    return view('postFile');
});
Route::post('postFile',['as'=>'postFile','uses'=>'mycontroller@postFile']);

// CREATED FILE .JSON
Route::get('getJson','mycontroller@getJson');

//created View
Route::get('myView','mycontroller@myView');

// truyền tham số trên view
Route::get('Time/{t }','mycontroller@Time');

//USED SECTION AND YIELD TO CALL CONTENT
Route::get('blade',function (){
   return view('layouts.master');
});

Route::get('blade2',function (){
   return view('layouts.master2');
});


Route::resource('photo','PhotoController');