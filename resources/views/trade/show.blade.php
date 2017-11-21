<div id="viewLogOverlay{{$trade->id}}" class="hidden viewLogModal">
  <div  class="row">
  <div class="col-xs-6">
    <form method="POST" action="{{route('trade.update',$trade->id)}}"  enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PUT')}}

      <select class="" name="status">
        @foreach($status as $is)
          @if($is == $trade->status)
            <option selected value="{{$is}}">{{ucfirst($is)}}</option>
          @else
            <option value="{{$is}}">{{ucfirst($is)}}</option>
          @endif
        @endforeach
      </select>
      Exit Price
      <input type="text" name="exitPrice" value="{{$trade->exitPrice}}">
      P/L <small>Profit Loss</small>
      <input type="text" name="pl" value="{{$trade->pl}}">
  </div>
  <div class="col-xs-6">
      <button type="submit">UPDATE</button>
    </form>
  </div>
</div>
    <h1>{{$trade->symbol}}</h1>
    <b>Type:</b> {{$trade->position}}<br/>
    <b>Supply Distal</b>: {{$trade->supplyDistal}}<br/>
    <b>Supply Proximal</b>: {{$trade->supplyProximal}}<br/>
    <b>Demand Proximal</b>: {{$trade->demandProximal}}<br/>
    <b>Demand Distal</b>: {{$trade->demandDistal}}<br/>
    <b>Supply Curve</b>: {{$trade->supplyCurve}}<br/>
    <b>Demand Curve</b>: {{$trade->demandCurve}}<br/>
    <b>Current Price at Trade</b>: {{$trade->currentPrice}}<br/>
    <b>Traded At</b>: {{$trade->datetime()}}<br/>
</div>
