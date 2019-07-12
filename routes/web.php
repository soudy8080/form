<?php
use App\Http\Controllers\PharmController;
use App\Http\Controllers\Admin\PharmMedController;

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


Route::get('/', 'HomeController@index')->name('welcome');


Auth::routes();

//Route::get('/project/create','PostController@create')->name('post.create'); 

//Route::post('/save-project-data','ProjectController@store');

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){

    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider','SliderController'); 
   

});
Route::group(['prefix'=>'client'],function(){

    Route::get('/project/create','PostController@create')->name('post.create'); 

    Route::post('/project/store','ProjectController@storeAds')->name('project.store');
    
   

});

