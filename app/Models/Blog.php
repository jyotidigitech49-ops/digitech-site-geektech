<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'status',
        'inserted_at',
        'heading',
        'slug',
        'content',
        'image1',
        'image2',
        'image3',
    ];
}
