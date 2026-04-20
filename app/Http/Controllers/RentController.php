<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Models\Rent;
use Spatie\FlareClient\View;

use function PHPUnit\Framework\returnSelf;

class RentController extends Controller
{
    public function rentproperty()
    {   
        $name="dara";
        return view('rent', compact('name'));
    }
}
