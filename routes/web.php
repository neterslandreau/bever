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

Route::get('/test', function() {
	return view('welcome');
});

Route::post('avatars', function () {

	$bucket = Config::get('filesystems.disks.s3.bucket');
	$s3 = Storage::disk('s3');
	$key = 'avatars';
	// dd(request()->file('avatar'));
	request()->file('avatar')->storeAs($key, 'image.png', 's3');
	return view('avatars');
	// dd($s3->getDriver());

});

Route::get('/avatars', function() {
	return view('avatars');
});

Route::get('/', function () {
    return view('front');
});

Route::post('/contact', 'ProjectsController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('projects/{slug}/edit', 'ProjectsController@edit');
Route::get('projects/create', 'ProjectsController@create');
Route::post('/projects/{slug}/edit', 'ProjectsController@edit');
Route::post('projects', 'ProjectsController@store');
Route::get('projects/{slug}/delete', 'ProjectsController@destroy');

Route::get('configurables/{slug}/edit', 'ConfigurablesController@edit');
Route::get('configurables/create', 'ConfigurablesController@create');
Route::post('/configurables/{slug}/edit', 'ConfigurablesController@edit');
Route::post('/configurables', 'ConfigurablesController@store');
Route::get('configurables/{slug}/delete', 'ConfigurablesController@destroy');
