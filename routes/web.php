<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


        Route::get('/', function () {
            return redirect()->route('login');});
        
        // Login/Logout routes
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        
        Route::post('/login', [AuthController::class, 'login']);
        Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        
        // --- ADMIN ROUTES ---
        Route::get('/admin/dashboard', fn() => view('admin.dashboard'));
        
        
        Route::get('/admin/properties', fn() => view('admin.properties.index'));
        Route::get('/admin/properties/create', fn() => view('admin.properties.create'));
        
        
        
        Route::middleware('auth')->group(function () {
            Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
        
            // Dummy routes for Users and Reports (replace with real controllers later)
            Route::get('/users', function() { return 'Users list'; })->name('users.index');
            Route::get('/users/create', function() { return 'Add user form'; })->name('users.create');
            Route::get('/reports', function() { return 'Reports page'; })->name('reports.index');
        });
        
        
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
