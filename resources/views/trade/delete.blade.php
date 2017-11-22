
<small><a href="#" class="deleteTradeModal is-pulled-right" data-target="deleteTradeModal{{$trade->id}}" data-id="{{$trade->id}}">Delete Trade</a></small>

<div class="modal deleteTradeModal{{$trade->id}}">
  <div class="modal-background"></div>
  <div class="modal-content">
    <span class="is-pulled-left">Are you sure you want to delete this logged trade?</span>
    <form method="POST" action="{{route('trade.destroy',$trade->id)}}">
    {{ csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="tradeId" value="{{$trade->id}}">
    <button class="button is-danger is-pulled-right" type="submit">DELETE TRADE</button>
    </form>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
</div>
