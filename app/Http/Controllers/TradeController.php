<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trade;
use App\Image;
use App\Note;

class TradeController extends Controller
{
  public function index()
  {
    $trades = Trade::with('notes','images')->where('user_id',auth()->user()->id)->orderBy('created_at','desc')->get();
    $status = ['win','loss','unfilled', 'open','cancelled'];
    return view('trade.index',compact('trades','status'));
  }

  public function update($id,Request $request)
  {
    $trade = Trade::find($id);
    $trade->status = request()->input(['status']);
    $trade->exitPrice = request()->input(['exitPrice']);
    $trade->pl = request()->input(['pl']);
    $trade->save();
    return back();
  }

  public function store()
  {
    $trade = request()->except(['_token']);
    $trade['user_id'] = auth()->user()->id;
    Trade::create($trade);
    return back();
  }
  public function destroy($id)
  {
    Trade::find($id)->delete();
    return back();
  }
}
