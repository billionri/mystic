<?php
/**
 * Created by PhpStorm.
 * User: dunstan
 * Date: 14-02-2016
 * Time: 10:01 PM
 */


Route::get('/dashboard', array( 'as' => 'dashboard', 'uses' => 'Mystic\Dashboard\Controllers\DashboardController@showDashboard'));
//Route::get('top_nav/', array( 'as' => 'pages.layout.top_nav', 'uses' => 'Mystic\Dashboard\Controllers\DashboardController@top_nav'));
Route::get('data/', array( 'as' => 'pages.layout.data', 'uses' => 'Mystic\Dashboard\Controllers\DashboardController@top_nav'));
Route::get('/mystic/list', array('as' => 'mystic_list', 'uses' => 'Mystic\Listusers\Controllers\ListusersController@mystic_list'));
Route::get('/mystic/edit/{id}', array('as' => 'edit_mystic', 'uses' => 'Mystic\Listusers\Controllers\ListusersController@edit'));
Route::post('/mystic/edit/{id}', array('as' => 'post_edit_mystic', 'uses' => 'Mystic\Listusers\Controllers\ListusersController@update'));
Route::get('/reports/excel-users-list', array('as' => 'excel_report_user_list', 'uses' => 'Mystic\Listusers\Controllers\ListusersController@downloadExcelUsersList'));
