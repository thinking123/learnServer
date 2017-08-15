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


Route::get('test1/{id}' , function(Conference $id){
   return view('home')->with('id' , $id);
});

Route::get('test2' , function(){
    return 'this is tes 2';
});
Route::get('home1' ,'TestController@test1');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test/{id}' , function($id){
   return 'this is test ='.$id;
})->name('tests.show');
$router->get('/test1/{id}/t/{t}' , function($id1 , $t ='default'){
    return 'this is test dd = '.$id1.$t;
});


Route::group([], function () {
    Route::get('hello', function () {
        return 'Hello';
    });
    Route::get('world', function () {
        return 'World';
    });
});