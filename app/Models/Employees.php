<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'employee_id',
        'fname',
        'lname',
        'minitial',
        'extension',
        'email',
        'bday',
        'address',
        'phone_number',
        'telephone_number',
        'age',
        'date_employed',
        'gender',
        'city',
        'region',
        'postal code',
        'country',
        'nationality',
        'position',
    ];
    public $timestamps=false;
}
