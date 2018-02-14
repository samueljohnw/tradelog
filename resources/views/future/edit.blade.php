@extends('template.full')
@section('content')
<h1 class="title">{{strtoupper($future->symbol)}}</h1>
<form class="" action="" method="post">
  Increments: <input type="text" name="increment" value="{{$future->increment}}"><br/>
  Valule: <input type="text" name="value" value="{{$future->value}}"><br/>
  Format: <input type="text" name="format" value="{{$future->format}}"><br/>
  Months: <input type="text" name="months" value="{{$future->months}}"><br/>
  <button type="submit" name="button">Update</button>
</form>
@endsection
