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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'verified']], function ()  {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //CompanyController
    Route::get('/company/list', [App\Http\Controllers\CompanyController::class, 'company_list'])->name('company_list');
    Route::get('/company/add', [App\Http\Controllers\CompanyController::class, 'company_addView'])->name('company_addView');
    Route::post('/company/add', [App\Http\Controllers\CompanyController::class, 'company_add'])->name('company_add');
    Route::post('/company/edit/{id}', [App\Http\Controllers\CompanyController::class, 'company_edit'])->name('company_edit');
    Route::get('/company/delete/{id}', [App\Http\Controllers\CompanyController::class, 'company_delete'])->name('company_delete');

    //EmployeController
    Route::get('/employe/list', [App\Http\Controllers\EmployeController::class, 'employe_list'])->name('employe_list');
    Route::get('/employe/add', [App\Http\Controllers\EmployeController::class, 'employe_addView'])->name('employe_addView');
    Route::post('/employe/add', [App\Http\Controllers\EmployeController::class, 'employe_add'])->name('employe_add');
    Route::post('/employe/edit/{id}', [App\Http\Controllers\EmployeController::class, 'employe_edit'])->name('employe_edit');
    Route::get('/employe/delete/{id}', [App\Http\Controllers\EmployeController::class, 'employe_delete'])->name('employe_delete');

});
