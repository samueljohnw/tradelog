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



Route::get('logout',function(){
  auth()->logout();
  return view('auth.login');
});
Auth::routes();
