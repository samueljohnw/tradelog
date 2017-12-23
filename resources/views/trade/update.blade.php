<div class="modal edit-modal updateTradeModal{{$trade->id}}">
  <div class="modal-background"></div>
  <div class="modal-content">
    <form method="POST" action="{{route('trade.update',$trade->id)}}"  enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PUT')}}
      <div class="columns">
        <div class="column is-one-third">
          <div class="field">
            <label class="label">Status</label>
            <div class="control">
              <div class="select" style="width:100%;">
              <select style="width:100%;" name="status">
                @foreach($status as $is)
                  @if($is == $trade->status)
                    <option selected value="{{$is}}">{{ucfirst($is)}}</option>
                  @else
                    <option value="{{$is}}">{{ucfirst($is)}}</option>
                  @endif
                @endforeach
              </select>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-one-third">
          <div class="field">
            <label class="label">Exit Price</label>
            <div class="control">
              <input type="text" class="input" name="exit" value="{{$trade->exit}}">
            </div>
          </div>
        </div>
        <div class="column is-one-third">
          <div class="field">
            <label class="label">Profit / Loss</label>
            <div class="control">
              <input class="input" type="text" name="pl" value="{{$trade->pl}}">
            </div>
          </div>
        </div>
      </div>
      <footer class="modal-card-foot">
        <button class="button is-primary" type="submit">UPDATE</button>
        <span class="button button-close">Cancel</span>
      </footer>
    </form>

  </div>
</div>
