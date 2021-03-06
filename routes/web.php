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
$this->put('notification-all-read', 'NotificationController@markAllAsRead');
$this->put('notification-read', 'NotificationController@markAsRead');
$this->get('notifications', 'NotificationController@notifications')->name('notifications');

$this->post('comment','Posts\CommentController@store')->name('comment.store');
$this->resource('posts', 'Posts\PostController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


