<div id="viewLogOverlay{{$log->id}}" class="hidden viewLogModal">
  <div  class="row">
  <div class="col-xxs-6">
    <form method="POST" action="{{route('log.update',$log->id)}}"  enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PUT')}}

      <select class="" name="status">
        @foreach($status as $is)
          @if($is == $log->status)
            <option selected value="{{$is}}">{{ucfirst($is)}}</option>
          @else
            <option value="{{$is}}">{{ucfirst($is)}}</option>
          @endif
        @endforeach
      </select>
      Exit Price
      <input type="text" name="exitPrice" value="{{$log->exitPrice}}">
  </div>
  <div class="col-xxs-6">
      <button type="submit">UPDATE</button>
    </form>
  </div>
</div>
    <h1>{{$log->symbol}}</h1>
    <b>Type:</b> {{$log->position}}<br/>
    <b>Supply Distal</b>: {{$log->supplyDistal}}<br/>
    <b>Supply Proximal</b>: {{$log->supplyProximal}}<br/>
    <b>Demand Proximal</b>: {{$log->demandProximal}}<br/>
    <b>Demand Distal</b>: {{$log->demandDistal}}<br/>
    <b>Supply Curve</b>: {{$log->supplyCurve}}<br/>
    <b>Demand Curve</b>: {{$log->demandCurve}}<br/>
    <b>Current Price at Trade</b>: {{$log->currentPrice}}<br/>
    <b>Traded At</b>: {{$log->datetime()}}<br/>
</div>
