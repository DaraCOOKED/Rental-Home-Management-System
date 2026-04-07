<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('login');
});

// Login/Logout routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    // Dummy routes for Users and Reports (replace with real controllers later)
    Route::get('/users', function() { return 'Users list'; })->name('users.index');
    Route::get('/users/create', function() { return 'Add user form'; })->name('users.create');
    Route::get('/reports', function() { return 'Reports page'; })->name('reports.index');
});



Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('    ', function () {
    return view('admin.properties.index');
});

Route::get('/admin/properties/create', function () {
    return view('admin.properties.create');
});

Route::get('/admin/tenants', function () {
    return view('admin.tenants.index');
});

Route::get('/admin/tenants/create', function () {
    return view('admin.tenants.create');
});

Route::get('/admin/leases', function () {
    return view('admin.leases.index');
});

Route::get('/admin/leases/create', function () {
    return view('admin.leases.create');
});

Route::get('/admin/payments', function () {
    return view('admin.payments.index');
});

Route::get('/admin/payments/create', function () {
    return view('admin.payments.create');
});

Route::get('/admin/maintenance', function () {
    return view('admin.maintenance.index');
});

// Tenant Routes
Route::get('/tenant/dashboard', function () {
    return view('tenant.dashboard');
});

Route::get('/tenant/lease', function () {
    return view('tenant.lease');
});

Route::get('/tenant/payments', function () {
    return view('tenant.payments');
});

Route::get('/tenant/maintenance', function () {
    return view('tenant.maintenance.index');
});

Route::get('/tenant/maintenance/create', function () {
    return view('tenant.maintenance.create');
});