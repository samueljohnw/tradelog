@extends('template.full')
@section('content')
<a href="#" id="logTradeModal" class="button is-primary">Log New Trade</a>
@include('trade.store')
<div class="table-scrollable">
<table class="table">
    <thead>
        <tr>
            <th>Symbol</th>
            <th>Images</th>
            <th>Notes</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($trades as $trade)
    <tr class="{{$trade->status}}">
      <td>
        {{($trade->position == 'short'? '&darr;' : '&uarr;')}} <a href="#" class="symbolModal" data-symbolId="{{$trade->id}}" data-target="symbolModal{{$trade->id}}">{{$trade->symbol}}</a>
        <div class="modal symbolModal{{$trade->id}}">
          <div class="modal-background"></div>
          <div class="modal-content">
            @include('trade.show')
          </div>
          <button class="modal-close is-large" aria-label="close"></button>
        </div>

      </td>
      <td>
        @foreach($trade->images as $image)
          <a href="#" class="imageModal" data-target="imageModal{{$trade->id}}" data-id="{{$trade->id}}">{{$image->title}}</a>
          <div class="modal showImage imageModal{{$trade->id}}">
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
        <div class="modal noteModal{{$trade->id}}" class="hidden">
          <div class="modal-background"></div>
          <div class="modal-content">
          <form method="POST" action="{{route('note.store')}}" >
            {{csrf_field()}}
            Notes:
            <textarea name="note" rows="2" cols="20"></textarea>
            <input type="hidden" name="trade_id" value="{{$trade->id}}">
            <button type="submit">Add Note</button>
          </form>
          @foreach($trade->notes()->get() as $note)
          <div class="alert alert-dismissable" role="alert">
            {{$note->text}}
          </div>
          @endforeach
          </div>
          <button class="modal-close is-large" aria-label="close"></button>
        </div>
      </td>
      <td>
      </td>
    </tr>
    @endforeach
</table>
</div>
@stop
