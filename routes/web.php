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
Route::get('/', 'ChartController@index');

Auth::routes();
Route::get('/international', 'ChartController@index');
Route::get('/unand', 'ChartController@index2');
Route::get('/register','RegistrationController@register');
Route::get('daftar','RegistrationController@daftar');
Route::post('/register/unand','RegistrationController@registerUnand')->name('register.unand');
Route::post('/register/international/user','RegistrationController@registerInternationaluser')->name('register.international.user');
Route::post('/register/international','RegistrationController@registerInternational')->name('register.international');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home/international', 'HomeController@index')->name('home');
    Route::get('/home/unand', 'HomeController@index2')->name('unand');

    Route::resource('permissions', 'Admin\PermissionController');
    Route::resource('roles', 'Admin\RolesController');
    Route::post('/roles/mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);

    Route::resource('users', 'Admin\UsersController');
    Route::post('users/mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

    Route::resource('international', 'InternationalStudentController');

    Route::resource('unand', 'UnandStudentController');
    Route::resource('unand_staff', 'UnandStaffController');
    Route::resource('inter_staff', 'InterStaffController');
    
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home/mydata','RegistrationController@registerSelfData')->name('international.setdata');
    Route::get('/home/me','RegistrationController@me')->name('international.me');
    Route::get('/home/files','HomeController@files')->name('international.files');
    Route::resource('/home', 'HomeController');
    
    Route::get('/home/unand', 'HomeController@index2')->name('unand');

    Route::resource('permissions', 'Admin\PermissionController');
    Route::resource('roles', 'Admin\RolesController');
    Route::post('/roles/mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);

    Route::resource('users', 'Admin\UsersController');
    Route::post('users/mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

    Route::resource('international', 'InternationalStudentController');

    Route::resource('unand', 'UnandStudentController');
    Route::resource('unand_staff', 'UnandStaffController');
    Route::resource('inter_staff', 'InterStaffController');
    
});



