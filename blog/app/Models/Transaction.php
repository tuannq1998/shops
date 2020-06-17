<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $guarded = [];

    protected $tst_status = [
        '1'=>[
            'class' => 'default',
            'name'  => 'Tiếp nhận'
        ],
        '2'=>[
            'class' => 'danger',
            'name'  => 'Đang vận chuyển'
        ],
        '3'=>[
            'class' => 'info',
            'name'  => 'Đã bàn giao'
        ],
        '-1'=>[
            'class' => 'success',
            'name'  => 'Đã hủy'
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->tst_status, $this->status, "[N\A]");
    }
    public function  user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
