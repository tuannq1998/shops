<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Keyword extends Model
{
    protected $table = 'keywords';
    protected $fillable = ['name','slug','desc','hot'];
    const HOT = 1;
    const  NONE = 0;
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
    public function getHot()
    {
        return Arr::get($this->c_hot, $this->hot, '[N\A]');
    }
}
