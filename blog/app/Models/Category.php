<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $fillable = ['name', 'slug', 'icon', 'avatar', 'active', 'hot', 'total_product', 'desc_seo', 'title_seo', 'keyword_seo'];
    const STATUS_SHOWS = 1;
    const  STATUS_HIDE = 0;
    const HOT = 1;
    const  NONE = 0;
    protected $c_active = [
        1 => [
            'name' => 'Shows',
            'class' => 'label-info'
        ],
        0 => [
            'name' => 'Hide',
            'class' => 'label-default'
        ]
    ];
    protected $c_hot = [
        1 => [
            'name' => 'Hot',
            'class' => 'label-info'
        ],
        0 => [
            'name' => 'None',
            'class' => 'label-default'
        ]
    ];

    public function getStatus()
    {
        return Arr::get($this->c_active, $this->active, '[N\A]');
    }
    public function getHot()
    {
        return Arr::get($this->c_hot, $this->hot, '[N\A]');
    }
}
