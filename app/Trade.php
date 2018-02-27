<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
  protected $fillable =
  [
    'user_id',
    'symbol',
    'position',
    'position',
    'entry',
    'exit',
    'stop',
    'currentPrice',
    'tradeDate',
    'tradeTime',
    'test'

  ];

  public function datetime()
  {
    return date('F jS', strtotime($this->tradeDate));
  }

  public function notes()
  {
      return $this->hasMany('App\Note');
  }

  public function images()
  {
      return $this->hasMany('App\Image');
  }
}
