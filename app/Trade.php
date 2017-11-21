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
    'supplyDistal',
    'supplyProximal',
    'demandProximal',
    'demandDistal',
    'supplyCurve',
    'demandCurve',
    'currentPrice',
    'tradeDate',
    'tradeTime'
  ];

  public function datetime()
  {
    return date('F jS', strtotime($this->tradeDate)).' '.date('g:h A', strtotime($this->tradeTime));
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
