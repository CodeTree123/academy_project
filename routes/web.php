<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

//

Route::post('/add-customer', [App\Http\Controllers\DashboardController::class, 'create'])->name('add.customer');

//customer list
Route::get('/list-customer', [App\Http\Controllers\DashboardController::class, 'listCustomer'])->name('list.customer');
//edit
Route::get('/edit-customer/{id}', [App\Http\Controllers\DashboardController::class, 'editCustomer'])->name('edit.customer');

Route::post('/edit-post-customer/{id}', [App\Http\Controllers\DashboardController::class, 'editPostCustomer'])->name('edit.post.customer');
//delete
Route::get('/delete-customer/{id}', [App\Http\Controllers\DashboardController::class, 'deleteCustomer'])->name('delete.customer');

//admin
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('admin.dashboard');






