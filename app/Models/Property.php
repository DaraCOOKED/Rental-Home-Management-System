<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model // Changed from Maintenance to Property
{
    protected $table = 'property_requests'; 
    public $timestamps = false;

    protected $fillable = [
        'unit_id',
        'tenat_id',
        'Email',
        'title',
        'status_request',
        'description',
    ];
}