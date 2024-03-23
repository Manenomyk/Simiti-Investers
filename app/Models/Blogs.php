<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blogs extends Model 
{
    use HasFactory;

    public $fillable = [
        'title',
        'content1',
        'image1',
        'content2',
        'image2',
        'content3',
        'video1',
        'video2',
        'profile',
        'about',

    ];
}
