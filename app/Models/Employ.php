<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employ extends Model
{
    use HasFactory;

    protected $table = 'employment';
    
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'address',
        'country',
        'zip',
        'age',
        'birth',
        'DOB',
        'dept',
        'division'
    ];
}
