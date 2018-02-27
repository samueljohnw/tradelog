<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trade;
use Carbon\Carbon;
class ScorecardController extends Controller
{
    public function index()
    {
      if(request()->input('test') == true)
      {
        $trades = Trade::with('notes','images')
                  ->where('test',true)
                  ->where('user_id',auth()->user()->id)
                    ->orderBy('created_at','desc')->get();

        $weekProgressData = Trade::where('user_id',auth()->user()->id)
                            ->where('test',true)
                            ->where('tradeDate','>',Carbon::now()->subWeek(1)->toDateTimeString())->get();
        $monthProgressData = Trade::where('user_id',auth()->user()->id)
                            ->where('test',true)
                            ->where('tradeDate','>',Carbon::now()->subWeek(4)->toDateTimeString())->get();
      }else{
        $trades = Trade::with('notes','images')
                  ->where('test',false)
                  ->where('user_id',auth()->user()->id)
                  ->orderBy('created_at','desc')->get();

        $weekProgressData = Trade::where('user_id',auth()->user()->id)
                            ->where('test',false)
                            ->where('tradeDate','>',Carbon::now()->subWeek(1)->toDateTimeString())->get();
        $monthProgressData = Trade::where('user_id',auth()->user()->id)
                            ->where('test',false)
                            ->where('tradeDate','>',Carbon::now()->subWeek(4)->toDateTimeString())->get();
      }


      return view('scorecard.index',compact('weekProgressData','monthProgressData','trades'));
    }
}
