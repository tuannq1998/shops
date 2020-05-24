<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable =['name', 'slug', 'avatar', 'view', 'active', 'description', 'contents', 'description_seo', 'title_seo'];
    const STATUS_Public = 1;
    const  STATUS_Private = 0;
    protected $a_active = [
        1 => [
            'name' => 'Public',
            'class' => 'label-info'
        ],
        0 => [
            'name' => 'Private',
            'class' => 'label-default'
        ]
    ];
    public function getStatus()
    {
        return Arr::get($this->a_active, $this->active, '[N\A]');
    }
}
