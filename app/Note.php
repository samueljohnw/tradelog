<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['log_id','text'];

    public function log()
    {
        return $this->belongsToMany('App\Log');
    }
}
