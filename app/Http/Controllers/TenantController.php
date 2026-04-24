<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;

class TenantController extends Controller
{
    public function index()
    {
        return Tenant::all();
    }
    public function shiow(Tenant $tenant)
    {
        return $tenant;
    }
}
