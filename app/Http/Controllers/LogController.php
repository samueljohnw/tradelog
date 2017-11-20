<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
use App\Image;
use App\Note;

class LogController extends Controller
{

  public function index()
  {
    $logs = Log::with('notes','images')->where('user_id',auth()->user()->id)->get();
    $status = ['win','loss','nf'];
    return view('log.index',compact('logs','status'));
  }

  public function update($id,Request $request)
  {

    $log = Log::find($id);
    $log->status = request()->input(['status']);
    $log->save();
    return back();
  }

  public function store()
  {
    $log = request()->except(['_token']);
    $log['user_id'] = auth()->user()->id;
    Log::create($log);
    return back();
  }
  public function destroy($id)
  {
    Log::find($id)->delete();
    return back();
  }
}
