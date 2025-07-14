<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class trainee extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'start_date',
    'end_date',
    'employee_id',
];

    //
}
