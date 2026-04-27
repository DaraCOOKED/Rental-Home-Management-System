<?php

namespace App\Http\Controllers;

use App\Models\LeaseAgreement;
use Illuminate\Http\Request;

class LeaseAgreementController extends Controller
{
    public function index()
    {
        $variable =LeaseAgreement::paginate(10);
        return view('idex',compact( $variable ));
    }
    
    public function show(LeaseAgreement $lease_agreement)
    {
        return $lease_agreement;
    }
}
