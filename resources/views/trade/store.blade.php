
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
              <input class="input" class="input" autofocus type="text" name="symbol" required>
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
              <select class="" name="position" required>
                <option value="">Select Position</option>
                <option value="short">Short</option>
                <option value="long">Long</option>
              </select>
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
              <input class="input" class="input" type="date" name="tradeDate" required value="{{date('Y-m-j')}}">
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
              <input class="input" class="input" type="time" name="tradeTime" required value="{{date('H:i')}}">
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Supply Distal</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" type="text" name="supplyDistal" required>
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Supply Proximal</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" type="text" name="supplyProximal" required>
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Demand Proximal</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" type="text" name="demandProximal" required>
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Demand Distal</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" type="text" name="demandDistal" required>
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Supply Curve</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" type="text" name="supplyCurve" required>
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Demand Curve</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="input" type="text" name="demandCurve" required>
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
              <input class="input" type="text" name="currentPrice" required>
            </div>
          </div>
        </div>
      </div>





  <button class="button is-primary" type="submit">Log Trade</button>
  </form>

  <button class="modal-close is-large" aria-label="close"></button>
  </div>
</div>
