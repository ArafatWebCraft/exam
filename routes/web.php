<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\EmployeesController;


Route::post('/employee-store', [EmployeesController::class, 'employee_store'])->name('employee.store');
Route::get('/employee-list', [EmployeesController::class, 'emoloyee_list'])->name('employee.list');
Route::get('employee-edit/{id}', [EmployeesController::class, 'employee_edit'])->name('employee.edit');
Route::put('/employee-update/{id}', [EmployeesController::class, 'employee_update'])->name('employee.update');
Route::get('/employee-delete/{id}', [EmployeesController::class, 'employee_delete'])->name('employee.delete');
