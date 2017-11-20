@extends('template.full')
@section('content')
<a href="#" data-modal-target="#logTradeOverlay" data-modal-fit-viewport="false">Log Trade</a>

@include('log.store')
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
    @foreach($logs as $log)
    <tr class="{{$log->status}}">
      <td>
        {{($log->position == 'short'? '&darr;' : '&uarr;')}} <a href="#" data-modal-target="#viewLogOverlay{{$log->id}}" data-modal-fit-viewport="false">{{$log->symbol}}</a>
        @include('log.show')
      </td>
      <td>{{$log->datetime()}} </td>
      <td>
        <b><button href="#" data-modal-target="#uploadImageOverlay{{$log->id}}" data-modal-fit-viewport="false">Upload</button></b>
        <div id="uploadImageOverlay{{$log->id}}" class="hidden">
          <form method="POST" action="{{route('image.store')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
            <input name="title" type="text">
            <input name="image" type="file">
            <input name="log_id" type="hidden" value="{{$log->id}}">
            <button type="submit">Submit</button>
          </form>
        </div>
        @foreach($log->images as $image)
          <a class="grouped{{$log->id}}" href="{{Storage::url($image->path)}}" data-modal-title="{{$image->title}}" data-modal-group=".grouped{{$log->id}}">{{$image->title}}</a> |
      @endforeach
      </td>
      <td>
        <a href="#" data-modal-target="#viewNotesOverlay{{$log->id}}" data-modal-fit-viewport="false">Notes</a>
        <div id="viewNotesOverlay{{$log->id}}" class="hidden">
          <form method="POST" action="{{route('note.store')}}" >
            {{csrf_field()}}
            Notes:
            <textarea name="note" rows="2" cols="20"></textarea>
            <input type="hidden" name="log_id" value="{{$log->id}}">
            <button type="submit">Add Note</button>
          </form>
          @foreach($log->notes()->get() as $note)
          <div class="alert alert-dismissable" role="alert">
            {{$note->text}}
          </div>
          @endforeach
        </div>
      </td>
      <td>
        @include('log.delete')
      </td>
    </tr>
    @endforeach
</table>
</div>
@stop
