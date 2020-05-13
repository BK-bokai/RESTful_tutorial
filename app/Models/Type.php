<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name',
        'sort',
    ];

    // /**
    //  * 取得類別的動物
    //  */
    // public function animals()
    // {
    //     return $this->hasMany('App\Models\Animal', 'type_id', 'id');
    // }
}
