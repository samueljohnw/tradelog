<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['trade_id','text'];

    public function trade()
    {
        return $this->belongsToMany('App\Trade');
    }
}
