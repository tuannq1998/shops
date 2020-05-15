<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'prodcuts';
    protected $fillable =['name', 'slug', 'price', 'price_entry', 'category_id', 'sale', 'avatar', 'view', ' hot', 'active', 'pay', 'description', 'contents', 'review_total', 'review_star'];
}
