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

// ROTAS DE SESSAO

// Auth
Route::redirect('/admin', '/auth/admin');
Route::redirect('/auth', '/auth/admin');

Route::group(['prefix' => 'auth'], function () {
    Route::get('/admin', "LoginController@loginForm")->name("auth.form")->middleware(["auth", "revalidate"]);
    Route::post('login', "LoginController@login")->name("admin.login");
    Route::get('logout', "LoginController@logout")->name("admin.logout");
});

// TODAS AS ROTAS DENTRO DESTE GRUPO EXIGEM SESSAO INICIADA
Route::group(['prefix' => '/', 'middleware' => ['employeeauth']], function () {
    // HOME
    Route::get('/', "HomeController@index")->name('home');
/*
    Route::get("/products", function () {
        return view("products.index");
    })->name("products");

    Route::get("/products/cadastro", function () {
        return view("products.cadastro");
    })->name("products.cadastro");
*/
    // CUSTOMER
    Route::get('customer', "CustomerController@index")->name('customer.home');
    Route::get('customer/create', "CustomerController@create")->name("customer.create");

    Route::get('/customer/list', "CustomerController@showAll")->name("customer.list");

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
    Route::get('sku/edit/{id}', "SkuController@edit")->name("sku.edit");
    Route::put('sku/update/{id}', "SkuController@update")->name("sku.update");
    Route::get('sku/delete', "SkuController@delete")->name("sku.delete");
    Route::delete('sku/destroy/{id}', "SkuController@destroy")->name("sku.destroy");
    Route::get('sku/show', "SkuController@show")->name("sku.show");
    Route::post('sku/search', "SkuController@search")->name("sku.search");

    // USERS
    Route::get('user', "UserController@index")->name('user.home');
    Route::get('/user/list', "UserController@showAll")->name("user.list");
    Route::get('user/create', "UserController@create")->name("user.create");
    Route::post('user/store', "UserController@store")->name("user.store");
    Route::get('user/edit/{id}', "UserController@edit")->name("user.edit");
    Route::put('user/update/{id}', "UserController@update")->name("user.update");
    Route::get('user/delete', "UserController@delete")->name("user.delete");
    Route::delete('user/destroy/{id}', "UserController@destroy")->name("user.destroy");
    Route::get('user/show', "UserController@show")->name("user.show");
    Route::post('user/search', "UserController@search")->name("user.search");

    // SHOPS
    Route::resource('lojas', 'ShopController');
    // EMPLOYEE
    Route::resource('funcionarios', 'EmployeeController');
    // CATEGORY
    Route::resource('categorias', 'CategoryController');
    Route::get('/category/list', "CategoryController@showAll")->name("category.list");
    Route::post('category/search', "CategoryController@search")->name("category.search");

    // BRANDS
    Route::resource('marcas', 'BrandsController');

    // PROVIDERS
    Route::resource('fornecedores', 'ProviderController');

    // PROVIDERS
    Route::resource('produtos', 'ProductController');
});

