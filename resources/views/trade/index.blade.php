@extends('template.full')
@section('content')
<a href="#" id="logTradeModal" class="button is-primary">Log New Trade</a>
@include('trade.store')
<div class="table-scrollable">
<table class="table is-fullwidth">
    <thead>
        <tr>
            <th>Symbol</th>
            <th>Images</th>
            <th>Notes</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
    @foreach($trades as $trade)
    <tr class="{{$trade->status}}">
      <td>
        {{($trade->position == 'short'? '&darr;' : '&uarr;')}} <a href="#" class="symbolModal" data-symbolId="{{$trade->id}}" data-target="symbolModal{{$trade->id}}">{{$trade->symbol}}</a>
        <div class="modal symbolModal{{$trade->id}}">
          <div class="modal-background"></div>
          <div class="modal-content show">
            @include('trade.show')
          </div>
          <button class="modal-close is-large" aria-label="close"></button>
        </div>

      </td>
      <td>
        @foreach($trade->images as $image)
          <a href="#" class="imageModal" data-target="imageModal{{$image->id}}" data-id="{{$image->id}}">{{$image->title}}</a>
          <div class="modal showImage imageModal{{$image->id}}">
            <div class="modal-background"></div>
            <div class="modal-content">
              <p class="image is-4by3">
                <img src="{{Storage::url($image->path)}}">
              </p>
            </div>
            <button class="modal-close is-large" aria-label="close"></button>
          </div>
      @endforeach
      </td>
      <td>
        <a href="#" class="noteModal" data-id="{{$trade->id}}">Notes</a>
        @include('trade.note')
      </td>
      <td>
        {{$trade->datetime()}}
      </td>
    </tr>
    @endforeach
</table>
</div>
@stop
