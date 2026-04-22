<?php

namespace App\Http\Controllers;
use app\Http\models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('properties');
    }
       public function store(Request $request)
    {
        $email = $request->input('email');
        dd($email);
    }
    
}
