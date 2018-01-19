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
    $status = ['win','loss','missed zone', 'open','cancelled','opposite direction','zones changed'];
    return view('trade.index',compact('trades','status'));
  }

  public function update($id,Request $request)
  {
    $trade = Trade::find($id);
    $trade->status = request()->input(['status']);
    $trade->exit = request()->input(['exit']);
    $trade->pl = request()->input(['pl']);
    $trade->save();
    return back();
  }

  public function store()
  {
    $trade = request()->except(['_token']);
    $trade['user_id'] = auth()->user()->id;
    $trade = Trade::create($trade);
    if (request()->hasFile('image'))
    {
      $path = request()->image->store('public');
      Image::create(['trade_id'=>$trade->id,'title'=>request()->input(['title']),'path'=>$path]);
    }
    return back();
  }
  public function destroy($id)
  {
    Trade::find($id)->delete();
    return back();
  }
}
