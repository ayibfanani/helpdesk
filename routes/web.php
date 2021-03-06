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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home.index');

Route::group(['middleware' => 'site'], function () {
    Route::get('/', 'SiteController@index')->name('site.index');

    // Route of Ticket
    require_once 'ticket.php';
    // Route of Knowledge Base
    require_once 'knowledge.php';
    // Route of Categories
    require_once 'category.php';
    // Route of Tags
    require_once 'tag.php';
    // Route of Tags
    require_once 'team.php';
});

Route::get('/', function () {
    return view('welcome');
});
