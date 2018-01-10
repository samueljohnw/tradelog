
<small><a href="#" class="deleteTradeModal is-pulled-right" data-target="deleteTradeModal{{$trade->id}}" data-id="{{$trade->id}}">Delete Trade</a></small>

<div class="modal edit-modal deleteTradeModal{{$trade->id}}">
  <div class="modal-background"></div>
  <div class="modal-content">
    <span>Are you sure you want to delete this logged trade?</span>
    <form method="POST" action="{{route('trade.destroy',$trade->id)}}">
    {{ csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="tradeId" value="{{$trade->id}}">
    <br/>
      <button class="button is-danger" type="submit">DELETE TRADE</button>
      <span class="button button-close">Cancel</span>

    </form>
</div>
</div>
