<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogisticServices extends Model
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
        'category',
        'sub_category',
        'annual_turnover',
        'boost',
        'comment',
    ];
}
