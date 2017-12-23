
<div  class="modal logTradeModal">
  <div class="modal-background"></div>
  <div class="modal-content">
  <form method="POST" action="{{route('trade.store')}}" autocomplete="off">
      {{ csrf_field()}}
      <div class="field is-horizontal">
        <div class="field-label is-small">
          <label class="label">Symbol</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" class="input" autofocus type="text" name="symbol" >
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Type</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control select">
              <div class="field">
                <div class="control">
                  <label class="radio">
                    <input type="radio" name="position" value="short">
                    Short
                  </label>
                  <label class="radio">
                    <input type="radio" name="position" value="long">
                    Long
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Trade Date</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" class="input" type="date" name="tradeDate"  value="{{date('Y-m-j')}}">
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Trade Time</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" class="input" type="time" name="tradeTime"  value="{{date('H:i')}}">
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Entry Price</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" type="text" name="entry" >
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Exit Price</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" type="text" name="exit" >
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Stop Loss</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" type="text" name="stop" >
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Current Price</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" type="text" name="currentPrice" >
            </div>
          </div>
        </div>
      </div>





  <button class="button is-primary" type="submit">Log Trade</button>
  </form>

  <button class="modal-close is-large" aria-label="close"></button>
  </div>
</div>
