@extends('template.full')
@section('content')
<a href="#" data-modal-target="#logTradeOverlay" data-modal-fit-viewport="false">Log Trade</a>

@include('trade.store')
<div class="table-scrollable">


<table >
    <thead>
        <tr>
            <th scope="col">Symbol</th>
            <th>Trade Date</th>
            <th>Images</th>
            <th>Notes</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($trades as $trade)
    <tr class="{{$trade->status}}">
      <td>
        {{($trade->position == 'short'? '&darr;' : '&uarr;')}} <a href="#" data-modal-target="#viewLogOverlay{{$trade->id}}" data-modal-fit-viewport="false">{{$trade->symbol}}</a>
        @include('trade.show')
      </td>
      <td>{{$trade->datetime()}} </td>
      <td>
        <b><button href="#" data-modal-target="#uploadImageOverlay{{$trade->id}}" data-modal-fit-viewport="false">Upload</button></b>
        <div id="uploadImageOverlay{{$trade->id}}" class="hidden">
          <form method="POST" action="{{route('image.store')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
            <input name="title" type="text">
            <input name="image" type="file">
            <input name="trade_id" type="hidden" value="{{$trade->id}}">
            <button type="submit">Submit</button>
          </form>
        </div>
        @foreach($trade->images as $image)
          <a class="grouped{{$trade->id}}" href="{{Storage::url($image->path)}}" data-modal-title="{{$image->title}}" data-modal-group=".grouped{{$trade->id}}">{{$image->title}}</a> |
      @endforeach
      </td>
      <td>
        <a href="#" data-modal-target="#viewNotesOverlay{{$trade->id}}" data-modal-fit-viewport="false">Notes</a>
        <div id="viewNotesOverlay{{$trade->id}}" class="hidden">
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
      </td>
      <td>
        @include('trade.delete')
      </td>
    </tr>
    @endforeach
</table>
</div>
@stop
