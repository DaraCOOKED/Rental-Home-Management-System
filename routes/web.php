<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

// --- AUTHENTICATION ---
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// --- ADMIN ROUTES ---
Route::get('/admin/dashboard', fn() => view('admin.dashboard'));

// Admin Properties
Route::get('/admin/properties', fn() => view('admin.properties.index'));
Route::get('/admin/properties/create', fn() => view('admin.properties.create'));

// Admin Tenants
Route::get('/admin/tenants', fn() => view('admin.tenants.index'));
Route::get('/admin/tenants/create', fn() => view('admin.tenants.create'));

// Admin Leases
Route::get('/admin/leases', fn() => view('admin.leases.index'));
Route::get('/admin/leases/create', fn() => view('admin.leases.create'));

// Admin Payments
Route::get('/admin/payments', fn() => view('admin.payments.index'));
Route::get('/admin/payments/create', fn() => view('admin.payments.create'));

// Admin Maintenance
Route::get('/admin/maintenance', fn() => view('admin.maintenance.index'));

// --- TENANT ROUTES ---
Route::get('/tenant/dashboard', fn() => view('tenant.dashboard'));
Route::get('/tenant/lease', fn() => view('tenant.lease'));
Route::get('/tenant/payments', fn() => view('tenant.payments'));

// Tenant Maintenance
Route::get('/tenant/maintenance', fn() => view('tenant.maintenance.index'));
Route::get('/tenant/maintenance/create', fn() => view('tenant.maintenance.create'));