<small><a href="#" data-modal-target="#deleteTradeOverlay{{$trade->id}}" data-modal-fit-viewport="false">Delete</a></small>
<div id="deleteTradeOverlay{{$trade->id}}" class="hidden">
  Are you sure you want to delete this logged trade?
  <form method="POST" action="{{route('trade.destroy',$trade->id)}}">
  {{ csrf_field()}}
  <input type="hidden" name="_method" value="DELETE">
  <input type="hidden" name="tradeId" value="{{$trade->id}}">
  <button type="submit">DELETE TRADE</button>
  </form>
</div>
