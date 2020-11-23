[12:51, 17/11/2020] +55 41 9764-0936: <?php

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
Route::delete("funcionarios/{id}","EmployeeController@destroy")->name("employee.delete");

// CUSTOMER
Route::get("/custumer",function()
{
    return view("custumer.index_custumer");
})->name("custumer");

Route::get("/custumer/add",function()
{
    return view("custumer.cadastro_custumer");
})->name("cadastro_custumer");

Route::post("/custumer/add",function()
{
    return view("custumer.cadastro_custumer");
})->name("cadastro_custumer");

Route::post("/custumer/add", function()
{
    return view("custumer.cadastro_custumer");
})->name("cadastro_custumer");

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
