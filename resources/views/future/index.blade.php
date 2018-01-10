@extends('template.full')
@section('content')
<a href="#" id="addFuture" class="button is-primary">Add New Future</a>
@include('future.store')
<table class="table is-fullwidth">
    <thead>
        <tr>
            <th>Symbol</th>
            <th>Cost</th>
        </tr>
    </thead>
    <tbody>
      @foreach($futures as $future)
      <tr>
        <td><a href="{{route('future.edit',$future->symbol)}}">{{strtoupper($future->symbol)}}</a></td>
        <td>{{$future->value}}</td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection
