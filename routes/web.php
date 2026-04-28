<?php
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TenantMaintenanceController;
use App\Http\Controllers\TenantController;

        Route::get('/', function () {
            return redirect()->route('login');});
        
        // Login/Logout routes
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login']);
        Route::get('/tenant/login', [AuthController::class, 'showTenantLoginForm'])->name('tenant.login');
        Route::post('/tenant/login', [AuthController::class, 'tenantLogin']);
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
        
        Route::get('/admin/tenants', fn() => view('admin.tenants.index'));
        Route::get('/admin/tenants/create', fn() => view('admin.tenants.create'));
        
        // Admin Maintenance
        Route::get('/admin/maintenance', fn() => view('admin.maintenance.index'));
         Route::get('/admin/maintenance/create', fn() => view('admin.maintenance.create'));
        
        
        // --- TENANT ROUTES ---
        Route::get('/tenant/dashboard', fn() => view('tenant.dashboard'));
        Route::get('/tenant/lease', fn() => view('tenant.lease'));
        Route::get('/tenant/payments', fn() => view('tenant.payments'));
        
        // Tenant Maintenance
        Route::get('/tenant/maintenance', fn() => view('tenant.maintenance.index'));
        Route::get('/tenant/maintenance/create', fn() => view('tenant.maintenance.create'));

        Route::get('/rent', [RentController::class, 'rentproperty']);





        Route::get('/properties', [PropertyController::class, 'index']);
        Route::post('/properties', [PropertyController::class, 'store'])->name('proerties');

        Route::get('/admin/properties', [PropertyController::class,'index']);
        
        
        Route::get('/admin/maintenance', [MaintenanceController::class, 'index'])->name('maintenance.index');
        Route::get('/admin/maintenance/create', [MaintenanceController::class, 'create'])->name('maintenance.create');
        Route::post('/admin/maintenance', [MaintenanceController::class, 'store'])->name('maintenance.store');






        Route::get('/tenant/maintenance', [TenantMaintenanceController::class, 'index'])->name('tenant.maintenance.index');
        Route::get('/tenant/maintenance/create', [TenantMaintenanceController::class, 'create'])->name('tenant.maintenance.create');
        Route::post('/tenant/maintenance', [TenantMaintenanceController::class, 'store'])->name('tenant.maintenance.store');



        Route::post('/tenant/login', [AuthController::class, 'tenantLogin']);


        Route::patch('/admin/maintenance/{id}/approve',  [MaintenanceController::class, 'approve'])->name('maintenance.approve');
        Route::patch('/admin/maintenance/{id}/reject',   [MaintenanceController::class, 'reject'])->name('maintenance.reject');
        Route::patch('/admin/maintenance/{id}/complete', [MaintenanceController::class, 'complete'])->name('maintenance.complete');



        Route::get('/admin/tenants', [TenantController::class, 'index'])->name('admin.tenants.index');
        Route::get('/admin/tenants/create', [TenantController::class, 'create'])->name('admin.tenants.create');
        Route::post('/admin/tenants', [TenantController::class, 'store'])->name('admin.tenants.store');