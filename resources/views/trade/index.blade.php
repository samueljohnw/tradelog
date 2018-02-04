@extends('template.left-sidebar')
@section('sidebar')
<div class="">
  @include('trade.progressBar')
</div>
@endsection
@section('content')
<a href="#" id="logTradeModal" class="button is-primary">Log New Trade</a>
@include('trade.store')
<div class="table-scrollable">
<table class="table is-fullwidth">
    <thead>
        <tr>
            <th>Symbol</th>
            <th>En / Ex / Stop</th>
            <th>Images</th>
            <th>Date</th>
            <th>P/L</th>
        </tr>
    </thead>
    <tbody>
    @foreach($trades as $trade)
    <tr class="{{$trade->status}}">
      <td>
        {{($trade->position == 'short'? '&darr;' : '&uarr;')}} <a href="#" class="symbolModal" data-symbolId="{{$trade->id}}" data-target="symbolModal{{$trade->id}}">{{strtoupper($trade->symbol)}}</a>
        <div class="modal symbolModal{{$trade->id}}">
          <div class="modal-background"></div>
          <div class="modal-content show">
            @include('trade.show')
          </div>
          <button class="modal-close is-large" aria-label="close"></button>
        </div>
      </td>
      <td>
        <small><b>{{$trade->entry}}</b> / <b>{{$trade->exit}}</b> / <b>{{$trade->stop}}</b></small>
      </td>
      <td>
        <div class="tags">
          @foreach($trade->images as $image)
            <a href="#" class="imageModal tag" data-target="imageModal{{$image->id}}" data-id="{{$image->id}}">{{$image->title}}</a>
            <div class="modal showImage imageModal{{$image->id}}">
              <div class="modal-background"></div>
              <div class="modal-content">
                <p class="image is-4by3">
                  <img src="{{Storage::url($image->path)}}">
                </p>
                &nbsp;<b>EN - {{$trade->entry}}</b> / <b>Ex - {{$trade->exit}}</b> / <b>Stop - {{$trade->stop}}</b>
              </div>
              <button class="modal-close is-large" aria-label="close"></button>
            </div>
          @endforeach
         </div>
      </td>
      <td>
        {{$trade->datetime()}}
      </td>
      <td>
        @if(!empty($trade->pl))
        ${{$trade->pl}}
        @endif
      </td>
    </tr>
    @endforeach
</table>
</div>
@stop
