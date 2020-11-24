<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ViewEvent;

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

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("/products",function(){
    return view("products.index");
})->name("products");

Route::get("/products/cadastro",function(){
    return view("products.cadastro");
})->name("products.cadastro");

Route::get("/lte",function(){
    return view('AdminLTE.index');
});

// EMPLOYEE
Route::get("funcionarios","EmployeeController@index")->name("employees");
Route::get("/funcionarios/add","EmployeeController@create")->name("employees.create");
Route::post("/funcionarios/add","EmployeeController@store")->name("employees.store");
Route::get("/funcionarios/edit/{id}","EmployeeController@edit")->name("employees.edit");
Route::post("/funcionarios/edit/{id}","EmployeeController@update")->name("employees.update");
Route::get("funcionarios/{id}","EmployeeController@show")->name("employees.show");

Route::get("funcionarios/edit/{id}","EmployeeController@edit")->name("employees.edit");
Route::post("funcionarios/edit/{id}","EmployeeController@update")->name("employees.update");
Route::delete("funcionarios/{id}","EmployeeController@destroy")->name("employees.delete");

// CUSTOMER
Route::get('customer', "CustomerController@index")->name('customer.home');
Route::get('/customer/list', "CustomerController@showAll")->name("customer.list");
Route::get('customer/create', "CustomerController@create")->name("customer.create");
Route::post('customer/store', "CustomerController@store")->name("customer.store");
Route::get('customer/edit', "CustomerController@edit")->name("customer.edit");
Route::put('customer/update', "CustomerController@update")->name("customer.update");
Route::get('customer/delete', "CustomerController@delete")->name("customer.delete");
Route::delete('customer/destroy', "CustomerController@destroy")->name("customer.destroy");
Route::get('customer/show', "CustomerController@show")->name("customer.show");
Route::post('customer/search', "CustomerController@search")->name("customer.search");

// COMPANY
Route::get('company', "CompanyController@index")->name('company.home');
Route::get('/company/list', "CompanyController@showAll")->name("company.list");
Route::get('company/create', "CompanyController@create")->name("company.create");
Route::post('company/store', "CompanyController@store")->name("company.store");
Route::get('company/edit', "CompanyController@edit")->name("company.edit");
Route::put('company/update', "CompanyController@update")->name("company.update");
Route::get('company/delete', "CompanyController@delete")->name("company.delete");
Route::delete('company/destroy', "CompanyController@destroy")->name("company.destroy");
Route::get('company/show', "CompanyController@show")->name("company.show");
Route::post('company/search', "CompanyController@search")->name("company.search");

// SETTINGS
Route::get('settings', "SettingsController@index")->name('settings.home');

// SKUS
Route::get('sku', "SkuController@index")->name('sku.home');
Route::get('/sku/list', "SkuController@showAll")->name("sku.list");
Route::get('sku/create', "SkuController@create")->name("sku.create");
Route::post('sku/store', "SkuController@store")->name("sku.store");
Route::get('sku/edit', "SkuController@edit")->name("sku.edit");
Route::put('sku/update', "SkuController@update")->name("sku.update");
Route::get('sku/delete', "SkuController@delete")->name("sku.delete");
Route::delete('sku/destroy', "SkuController@destroy")->name("sku.destroy");
Route::get('sku/show', "SkuController@show")->name("sku.show");
Route::post('sku/search', "SkuController@search")->name("sku.search");