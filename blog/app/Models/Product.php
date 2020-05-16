<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable =['name', 'slug', 'price', 'price_entry', 'category_id', 'sale', 'avatar', 'view', ' hot', 'active', 'pay', 'description', 'contents', 'review_total', 'review_star'];

    const HOT = 1;
    const  NONE = 0;
    protected $p_hot = [
        1 => [
            'name' => 'Hot',
            'class' => 'label-info'
        ],
        0 => [
            'name' => 'None',
            'class' => 'label-default'
        ]
    ];
    public function getHot()
    {
        return Arr::get($this->p_hot, $this->hot, '[N\A]');
    }

    const STATUS_SHOWS = 1;
    const  STATUS_HIDE = 0;
    protected $p_active = [
        1 => [
            'name' => 'Active',
            'class' => 'label-info'
        ],
        0 => [
            'name' => 'Inactive',
            'class' => 'label-default'
        ]
    ];
    public function getStatus()
    {
        return Arr::get($this->p_active, $this->active, '[N\A]');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
