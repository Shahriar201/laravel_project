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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Frontend\FrontendController@index');
Route::get('about-us', 'Frontend\FrontendController@aboutUs')->name('about.us');
Route::get('contact-us', 'Frontend\FrontendController@contactUs')->name('contact.us');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('users')->group(function(){

    Route::get('/view', 'Backend\UserController@view')->name('users.view');
    Route::get('/add', 'Backend\UserController@add')->name('users.add');
    Route::post('/store', 'Backend\UserController@store')->name('users.store');
    
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
    Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
    Route::get('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
    
});

Route::prefix('profiles')->group(function(){

    Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
    Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
    Route::post('/store', 'Backend\ProfileController@update')->name('profiles.update');
    Route::get('/password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
    Route::post('/password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');
    
});

Route::prefix('logos')->group(function(){

    Route::get('/view', 'Backend\LogoController@view')->name('logos.view');
    Route::get('/add', 'Backend\LogoController@add')->name('logos.add');
    Route::post('/store', 'Backend\LogoController@store')->name('logos.store');
    
    Route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logos.edit');
    Route::post('/update/{id}', 'Backend\LogoController@update')->name('logos.update');
    Route::get('/delete/{id}', 'Backend\LogoController@delete')->name('logos.delete');
    
});

Route::prefix('sliders')->group(function(){

    Route::get('/view', 'Backend\SliderController@view')->name('sliders.view');
    Route::get('/add', 'Backend\SliderController@add')->name('sliders.add');
    Route::post('/store', 'Backend\SliderController@store')->name('sliders.store');
    
    Route::get('/edit/{id}', 'Backend\SliderController@edit')->name('sliders.edit');
    Route::post('/update/{id}', 'Backend\SliderController@update')->name('sliders.update');
    Route::get('/delete/{id}', 'Backend\SliderController@delete')->name('sliders.delete');
    
});

Route::prefix('missions')->group(function(){

    Route::get('/view', 'Backend\MissionController@view')->name('missions.view');
    Route::get('/add', 'Backend\MissionController@add')->name('missions.add');
    Route::post('/store', 'Backend\MissionController@store')->name('missions.store');
    
    Route::get('/edit/{id}', 'Backend\MissionController@edit')->name('missions.edit');
    Route::post('/update/{id}', 'Backend\MissionController@update')->name('missions.update');
    Route::get('/delete/{id}', 'Backend\MissionController@delete')->name('missions.delete');
    
});

Route::prefix('visions')->group(function(){

    Route::get('/view', 'Backend\VisionController@view')->name('visions.view');
    Route::get('/add', 'Backend\VisionController@add')->name('visions.add');
    Route::post('/store', 'Backend\VisionController@store')->name('visions.store');
    
    Route::get('/edit/{id}', 'Backend\VisionController@edit')->name('visions.edit');
    Route::post('/update/{id}', 'Backend\VisionController@update')->name('visions.update');
    Route::get('/delete/{id}', 'Backend\VisionController@delete')->name('visions.delete');
    
});
