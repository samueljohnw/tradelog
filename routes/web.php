<?php

Route::group(['middleware' => ['auth']], function() {
  Route::resource('trade','TradeController');  
  Route::post('note','NoteController@store')->name('note.store');
  Route::post('image','ImageController@store')->name('image.store');
});
Route::get('logout',function(){
  auth()->logout();
  return view('auth.login');
});
Auth::routes();
