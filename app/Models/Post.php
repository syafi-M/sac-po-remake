<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $casts = [
        'addon_img' => 'array',
        ];

    protected $fillable = [
        'title',
        'img',
        'addon_img',
        'desc',
        'author'
    ];
}
