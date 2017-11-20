<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['log_id','path','title'];

    public function log()
    {
        return $this->belongsToMany('App\Log');
    }
}
