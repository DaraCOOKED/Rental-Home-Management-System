<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $menuItems = [
            [
                'label' => 'dashboard',
                'icon' => 'bi bi-house',
                'route' => 'admin.dashboard',
            ],
            // [
            //     'label' => 'Users',
            //     'icon' => 'bi bi-people',
            //     'route' => 'users.index',
            //     'children' => [
            //         ['label' => 'All Users', 'route' => 'users.index'],
            //         ['label' => 'Add User', 'route' => 'users.create'],
            //     ],
            // ],
            // [
            //     'label' => 'Reports',
            //     'icon' => 'bi bi-graph-up',
            //     'route' => 'reports.index',
            // ],
        ];

        return view('admin.dashboard', compact('menuItems'));
    }
}