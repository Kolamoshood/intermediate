<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'matric_no',
        'faculty',
        'department',
        'phone_no',
        'dob',
        'level',
        'sex',
        'entry_mode',
        'entry_year',
        'state_of_origin',
        'lga',
        'password',
        'email',
        'image',
    ];
}
