<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index');

Route::get('/test', 'PagesController@index');
//employee
Route::get('/employees/index', 'EmployeeController@index')->name('employee.index');

//Route::get('/getData','EmployeeController@getData');

//Route::get('/employees/index', function($id){
		//return json_encode(App\Employee::orderBy('id', 'desc')->get());
	//});

//Route::get('/users', 'EmployeeController@index')->name('employee.index');

Route::post('/employees/store', 'EmployeeController@store')->name('employee.store');

//suppliers
Route::get('/suppliers/index', 'SupplierController@index')->name('supplier.index');

Route::post('/suppliers/store', 'SupplierController@store')->name('supplier.store');


//suppliers payment
Route::get('/supplier_payment/index', 'SupplierpaymentController@index')->name('supplierpayment.index');

Route::post('/suppliers_payment/store', 'SupplierpaymentController@store')->name('supplierpayment.store');

//Cost
Route::get('/cost/regular', 'RegularcostController@regular')->name('cost.regular');

Route::post('/regular/store', 'RegularcostController@regularstore')->name('regularcost.store');

//office cost
Route::get('/officecost/office', 'OfficecostController@index')->name('officecost.index');

Route::post('/officecost/store', 'OfficecostController@store')->name('officecost.store');

//office purchage
Route::get('/officepurchage/index', 'OfficepurchageController@index')->name('officepurchage.index');

Route::post('/officepurchage/store', 'OfficepurchageController@store')->name('officepurchage.store');

//invest
Route::get('/invest/index', 'InvestController@index')->name('invest.index');

Route::post('/invest/store', 'InvestController@store')->name('invest.store');

//employee salary
Route::get('/employeesalary/index', 'EmployeesalaryController@index')->name('employeesalary.index');

Route::post('/employeesalary/store', 'EmployeesalaryController@store')->name('employeesalary.store');

//bkash
Route::get('/bkash/index', 'BkashController@index')->name('bkash.index');

Route::post('/bkash/store', 'BkashController@store')->name('bkash.store');

//advance payment
Route::get('/advancepayment/index', 'AdvancepaymentController@index')->name('advancepayment.index');

Route::post('/advancepayment/store', 'AdvancepaymentController@store')->name('advancepayment.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
