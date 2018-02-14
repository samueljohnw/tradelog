<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Future;

class FutureController extends Controller
{
    public function index()
    {
      $futures = Future::all();
      return view('future.index',compact('futures'));
    }
    public function store()
    {
      $trade = request()->except(['_token']);
      Future::create($trade);
      return back();
    }
    public function edit($future)
    {
      $future = Future::where('symbol',$future)->first();
      return view('future.edit',compact('future'));
    }

    public function update($future)
    {
      $future = Future::find($future);


      $future->increment = request()->input('increment');
      $future->value = request()->input('value');
      $future->format = request()->input('format');;
      $future->months = request()->input('months');;

      $future->save();
      return view('future.edit',compact('future'));
    }


    public function win($future,$current,$exit)
    {
      $future = Future::where('symbol',$future)->first();

      $finish =  $current - $exit;
      $tot = str_replace('.', '', $finish);
      $math = $tot * $future->value;
      return '$'.str_replace('-','',$math);

    }
}
