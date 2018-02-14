<?php
Route::get('/',function(){
  return redirect('/login');
});
Route::group(['middleware' => ['auth']], function() {
  Route::resource('trade','TradeController');
  Route::post('note','NoteController@store')->name('note.store');
  Route::post('image','ImageController@store')->name('image.store');
  Route::resource('future','FutureController');
});

Route::post('riskreward',function(){
  $symbol = substr(request()->input('symbol'), 0, 2);
  $entry = request()->input('entry');
  $exit = request()->input('exit');
  $stop = request()->input('stop');
  $future = \App\Future::where('symbol',$symbol)->first();

  $entry = str_replace('.', '', $entry);
  $exit = str_replace('.', '', $exit);
  $stop = str_replace('.', '', $stop);
  if($entry > $exit)
  {
    $reward = $entry - $exit;
  }else{
    $reward = $exit - $entry;
  }

  $reward = $reward / $future->increment;
  $reward = $reward * $future->value;

  if($entry > $stop)
  {
    $risk = $entry - $stop;
  }else{
    $risk = $stop - $entry;
  }

  $risk = $risk / $future->increment;
  $risk = $risk * $future->value;

  return response()->json([
    'risk' => $risk,
    'reward' => $reward
]);;

});

Route::get('logout',function(){
  auth()->logout();
  return view('auth.login');
});
Auth::routes();
