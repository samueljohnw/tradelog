
<div id="logTradeOverlay" class="hidden">
    <p>
  <form method="POST" action="{{route('trade.store')}}">
  {{ csrf_field()}}
  <div class="row">
    <div class="col-xxs-3">
      <b>Symbol</b>
      <input autofocus type="text" name="symbol" required>
    </div>
    <div class="col-xxs-3">
      <b>Type</b>
      <select class="" name="position" required>
        <<option value="">Select Position</option>
        <<option value="short">Short</option>
        <<option value="long">Long</option>
      </select>
    </div>
    <div class="col-xxs-3">
      <b>Trade Date</b>
      <input type="date" name="tradeDate" required value="{{date('Y-m-j')}}">
    </div>
    <div class="col-xxs-3">
      <b>Trade Time</b>
      <input type="time" name="tradeTime" required value="{{date('H:i')}}">
    </div>
  </div>
  <div class="row">
    <div class="col-xxs-6">
      <b>Supply Distal</b>
      <input type="text" name="supplyDistal" required>
      <br/>
      <b>Supply Proximal</b>
      <input type="text" name="supplyProximal" required>
      <br/>
      <b>Demand Proximal</b>
      <input type="text" name="demandDistal" required>
      <br/>
      <b>Demand Distal</b>
      <input type="text" name="demandProximal" required>
    </div>
    <div class="col-xxs-6">
      <b>Supply Curve</b>
      <input type="text" name="supplyCurve" required>
      <br/>
      <b>Demand Curve</b>
      <input type="text" name="demandCurve" required>
      <br/>
      <b>Current Price</b>
      <input type="text" name="currentPrice" required>
    </div>
</div>
  <button type="submit">Log Trade</button>
  </form>
  </p>
</div>
