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

Route::get('/','PagesController@index');

Auth::routes();
// LOGINs @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// Manager !!!
Route::post('/manager/login', 'ManagerController@login');
Route::get('/manager', 'ManagerController@index');
// Customer !!!
Route::post('customer/login', 'CustomerController@login');
Route::get('/customer', 'CustomerController@index');
Route::get('/customer/see-schedule', 'CustomerController@see_schedule_page');
Route::get('/customer/see-schedule/{id}', 'CustomerController@see_schedule');
Route::post('/customer/select-locker', 'CustomerController@select_locker');
Route::get('/customer/basic-info', 'CustomerController@basic_info');


// Reception !!!
Route::POST('reception/login' , 'ReceptionController@login');
Route::get('reception', 'ReceptionController@index');

// LOGINs end @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
Route::get('/home', 'HomeController@index')->name('home');

// functions  for the managers
Route::get('/manager/add-coach', 'ManagerController@add_coach_page');
Route::post('/manager/addcoach', 'ManagerController@add_coach');
Route::get('/manager/show-all-coaches','ManagerController@show_all_coaches');
Route::post('/manger/fire-coach', 'ManagerController@fire_coach');
Route::get('/manager/add-rece', 'ManagerController@add_rece_page');
Route::post('/manager/add-rece', 'ManagerController@add_rece');
Route::get('/manager/show-all-receptions', 'ManagerController@show_all_rece');
Route::post('/manger/fire-rece', 'ManagerController@fire_rece');
Route::get('/manager/add-product', 'ManagerController@add_Product_page');
Route::post('/manager/addproduct', 'ManagerController@add_product');
Route::get('/manager/add-machine', 'ManagerController@add_machine_page');
Route::post('/manager/addmachine', 'ManagerController@add_machine');
Route::post('/add_supplement', 'ManagerController@add_supp');
 // TODO
Route::post('/add_cleanWorker', 'ManagerController@add_cleanWorker');

// functions for the reception
Route::get('/reception/add-customer', 'ReceptionController@add_customer_page');
Route::post('/reception/addcustomer', 'ReceptionController@add_customer');


// functions for the coach
Route::get('/coach', 'CoachController@index');
Route::post('/coach/login', 'CoachController@login');
Route::get('/coach/allSTD', 'CoachController@all_std');
Route::post('/coach/add-schedule', 'CoachController@add_schedule');
Route::get('/coach/exercise', 'CoachController@add_exercise_page');
Route::post('/coach/add-exercise', 'CoachController@add_exercise');
Route::post('/coach/add-locker', 'CoachController@add_locker');