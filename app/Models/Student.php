<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'name',
        'birth',
        'sex',
        'cpf',
        'biography',
        'country',
        'state',
        'city'
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
