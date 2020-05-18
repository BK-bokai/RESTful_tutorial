<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Animal extends Model
{
    protected $fillable = [
        'type_id',
        'name',
        'birthday',
        'area',
        'fix',
        'description',
        'personality',
    ];


    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    /**
     * 計算年齡
     *
     * @param  string  $value
     * @return string
     */
    public function getAgeAttribute()
    {
        $diff = Carbon::now()->diff($this->birthday);
        return "{$diff->y}歲{$diff->m}月";
    }

    /**
     * 取得動物的刊登人
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * 多對多關聯animal與user
     */
    public function like()
    {
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }
}
