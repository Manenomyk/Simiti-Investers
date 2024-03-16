<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceServices extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'email',
        'gender',
        'location',
        'region',
        'photo',
        'phone',
        'comment',
    ];
}
