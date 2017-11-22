
  <a href="#" class="button is-primary updateTradeModal" data-target="updateTradeModal{{$trade->id}}" data-id="{{$trade->id}}">Update Trade</a>
  <a href="#" class="button is-primary newImageModal" data-target="newImageModal{{$trade->id}}" data-id="{{$trade->id}}">Upload New Image</a>
  <h1>{{$trade->symbol}}</h1>
  <div class="columns">
    <div class="column is-6">Type:</div>
    <div class="column">{{$trade->position}}</div>
  </div>
  <div class="columns">
    <div class="column is-6">Supply Distal:</div>
    <div class="column">{{$trade->supplyDistal}}</div>
  </div>
  <div class="columns">
    <div class="column is-2">Type:</div>
    <div class="column">{{$trade->position}}</div>
  </div>
  <div class="columns">
    <div class="column is-2">Type:</div>
    <div class="column">{{$trade->position}}</div>
  </div>
  <div class="columns">
    <div class="column is-2">Type:</div>
    <div class="column">{{$trade->position}}</div>
  </div>
  <div class="columns">
    <div class="column is-2">Type:</div>
    <div class="column">{{$trade->position}}</div>
  </div>
  <div class="columns">
    <div class="column is-2">Type:</div>
    <div class="column">{{$trade->position}}</div>
  </div>


    <b>Supply Proximal</b>: {{$trade->supplyProximal}}<br/>
    <b>Demand Proximal</b>: {{$trade->demandProximal}}<br/>
    <b>Demand Distal</b>: {{$trade->demandDistal}}<br/>
    <b>Supply Curve</b>: {{$trade->supplyCurve}}<br/>
    <b>Demand Curve</b>: {{$trade->demandCurve}}<br/>
    <b>Current Price at Trade</b>: {{$trade->currentPrice}}<br/>
    <b>Traded At</b>: {{$trade->datetime()}}<br/>
    <i>{{$trade->status}}</i>
    @include('trade.delete')
    <div class="modal updateTradeModal{{$trade->id}}">
      <div class="modal-background"></div>
      <div class="modal-content">
        <form method="POST" action="{{route('trade.update',$trade->id)}}"  enctype="multipart/form-data">
          {{csrf_field()}}
          {{method_field('PUT')}}
          Status
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

          <button type="submit">UPDATE</button>
        </form>
        <button class="modal-close is-large" aria-label="close"></button>
      </div>
    </div>
      <div class="modal newImageModal{{$trade->id}}">
        <div class="modal-background"></div>
        <div class="modal-content">
          <form method="POST" action="{{route('image.store')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
            Image Title
            <input name="title" type="text">
            <input name="image" type="file">
            <input name="trade_id" type="hidden" value="{{$trade->id}}">
            <button type="submit">Submit</button>
          </form>
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
      </div>
