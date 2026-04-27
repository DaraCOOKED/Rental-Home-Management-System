<?php

namespace App\Http\Controllers;

use App\Models\Property; // This now works because the file/class exists!
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all(); // No more "Undefined" error!
        return view('admin.properties.index', compact('properties'));
    }
    
    // ... rest of your code
}