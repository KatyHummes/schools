<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birth',
        'sex',
        'cpf',
        'biography',
        'country',
        'state',
        'city'
    ];
}
