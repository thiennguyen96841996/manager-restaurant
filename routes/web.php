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

Route::group(['prefix' => 'manager', 'namespace' => 'Manager', 'middleware' => 'manager']
, function () {
    Route::get('/', 'PagesController@index')->name('manager.home');
    Route::resource('users', 'UsersController', ['except' => 'show']);
    Route::resource('vacations', 'ManagerVacationController', ['except' => ['destroy', 'edit', 'store']]);
    Route::resource('overtimes', 'OvertimeController', ['except' => 'destroy', 'edit', 'store']);
    Route::resource('salary', 'ManagerSalaryController', ['except' => 'create', 'destroy']);
    Route::get('salary/create/{id}', 'ManagerSalaryController@create')->name('salary.create');
    Route::resource('category', 'CategoryController', ['except' => ['edit', 'show', 'create']]);
    Route::resource('product', 'ProductController');
    Route::post('notification/fetch_noti_count', 'NotificationsController@fetch_noti_count')
        ->name('notification.fetch_noti_count');
    Route::post('notification/fetch_noti_list', 'NotificationsController@fetch_noti_list')
        ->name('notification.fetch_noti_list');
    Route::post('notification/read', 'NotificationsController@read')
        ->name('notification.read');
});

Route::group(['prefix' => 'employee', 'namespace' => 'Employee', 'middleware' => 'employee']
, function () {
    Route::get('/', 'PagesController@index')->name('employee.home');
    Route::resource('vacation', 'VacationController', ['except' => 'show']);
    Route::resource('overtime', 'OvertimeController', ['except' => 'show']);
    Route::resource('attend', 'AttendController', ['only' => ['index', 'store']]);
    Route::resource('profile', 'ProfileController', ['except' => ['show', 'store', 'destroy']]);
    Route::resource('notifications', 'NotificationController', ['except' => ['edit', 'store']]);
});

Route::get('/', 'PageController@index')->name('home');
Route::get('/menu', 'MenuController@index')->name('menu');
Route::get('/product/{id}', 'MenuController@show')->name('menu.product');
Route::post('comment/store', 'CommentController@store')->name('comment.add');
Route::post('comment/fetch', 'CommentController@fetch')->name('comment.fetch');
