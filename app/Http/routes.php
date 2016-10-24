<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
		
Route::group(array('prefix' => 'api'), function() {
    Route::post('authenticate', 'AuthController@authenticate');
    Route::get('authenticate/user', 'AuthController@getAuthenticatedUser');
    Route::get('authenticate/{user?}', 'AuthController@index');

    Route::get('user/{id}', 'UserController@show');
    Route::get('users', 'UserController@index');

    Route::get('reports', 'ReportsController@index');
    Route::post('reports', 'ReportsController@store');
    Route::post('reports/{id}', 'ReportsController@update');
    Route::get('reports/{id}', 'ReportsController@show');
    Route::get('reports_by_day/{id}', 'ReportsController@showToDay');
    Route::delete('reports/{id}', 'ReportsController@destroy');

    Route::get('projects', 'ProjectsController@index');
    Route::post('projects', 'ProjectsController@store');
    Route::post('projects_update', 'ProjectsController@update');
    Route::get('projects/{id}', 'ProjectsController@show');
    Route::delete('projects', 'ProjectsController@destroy');

    Route::get('projects/{id}/details', 'ProjectsController@getDetails');
    Route::post('tasks', 'TaskController@store');
    Route::post('tasks_update', 'TaskController@update');
    Route::delete('tasks', 'TaskController@destroy'); 
    Route::post('project_users', 'ProjectsController@storePU');

    Route::post('taskbags_update', 'TaskbagController@update');
    Route::post('taskbags', 'TaskbagController@store');

    Route::get('feeds', 'FeedsController@index');
    Route::post('feeds', 'FeedsController@store');
    Route::delete('feeds', 'FeedsController@destroy');

    Route::post('comments', 'CommentsController@store');
    Route::delete('comments', 'CommentsController@destroy');

    Route::post('profile_update', 'UserController@update');
    Route::post('profile_change_pass', 'UserController@changePassword');

    // Room manager


    Route::get('room_manager', 'RoomManagerController@index');
    Route::post('room_manager/insert_fund', 'RoomManagerController@insertFund');
    
    Route::group(['middleware' => 'jwt.auth'], function() {

    });
        Route::get('employees/{id?}', 'Employees@index');
        Route::post('employees', 'Employees@store');
        Route::post('employees/{id}', 'Employees@update');
        Route::delete('employees/{id}', 'Employees@destroy');

});
