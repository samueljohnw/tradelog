<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trade;
use Carbon\Carbon;
class ScorecardController extends Controller
{
    public function index()
    {
      $trades = Trade::with('notes','images')->where('user_id',auth()->user()->id)->orderBy('created_at','desc')->get();
      $weekProgressData = Trade::where('user_id',auth()->user()->id)->where('tradeDate','>',Carbon::now()->subWeek(1)->toDateTimeString())->get();
      $monthProgressData = Trade::where('user_id',auth()->user()->id)->where('tradeDate','>',Carbon::now()->subWeek(4)->toDateTimeString())->get();
      return view('scorecard.index',compact('weekProgressData','monthProgressData','trades'));
    }
}
