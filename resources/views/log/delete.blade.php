<small><a href="#" data-modal-target="#deleteLogOverlay{{$log->id}}" data-modal-fit-viewport="false">Delete</a></small>
<div id="deleteLogOverlay{{$log->id}}" class="hidden">
  Are you sure you want to delete this logged trade?
  <form method="POST" action="{{route('log.destroy',$log->id)}}">
  {{ csrf_field()}}
  <input type="hidden" name="_method" value="DELETE">
  <input type="hidden" name="tradeId" value="{{$log->id}}">
  <button type="submit">DELETE LOG</button>
  </form>
</div>
