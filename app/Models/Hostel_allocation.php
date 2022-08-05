<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostel_allocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'payment_id',
        'status',
    ];
}
