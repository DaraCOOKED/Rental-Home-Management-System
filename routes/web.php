<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', fn() => redirect()->route('login'));

// Auth routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


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