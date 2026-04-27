<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintence_requests';
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