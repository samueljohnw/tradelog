<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Future extends Model
{
  protected $fillable = ['symbol','format','increment','value','months'];

}
