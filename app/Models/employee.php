<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class employee extends Model
{
use HasFactory;
protected $fillable = [
    'name',
    'email',
    'phone',
    'position',
    'team_id',
    'manager_id',
];

    //
}
