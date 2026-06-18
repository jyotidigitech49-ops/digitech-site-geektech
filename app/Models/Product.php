<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public $timestamps = false;

    protected $fillable = [
        'status',
        'name',
        'slug',
        'cat_id',
        'short_description',
        'overview_description',
        'specification_description',
        'stock_status',
        'parent_cat',
        'featured',
        'price',
        'img1',
        'img2',
        'img3',
        'img4',
        'blog_ids',
    ];
}
