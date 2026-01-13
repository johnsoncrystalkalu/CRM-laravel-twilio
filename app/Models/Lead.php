<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'sr_no',
        'phone_number',
        'first_name',
        'last_name',
        'state',
        'address',
        'city',
        'zip_code',
        'age',
        'dob',
        'lead_type',
        'status',
        'owner',
        'category',
        'notes',
    ];
}
