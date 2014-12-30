<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'taskController@index']);
Route::post('tasks/update/{id}', array('uses' => 'taskController@update'));
Route::resource('tasks', 'taskController');



/*
Route::get('/', array('as' => 'home', 'uses'=> 'taskController@getIndex' ));


Route::resource('tasks', 'taskController');
Route::model('tasks', 'Task');

Route::bind('tasks', function($value, $route) {
	return Task::whereSlug($value)->first();
});

*/
