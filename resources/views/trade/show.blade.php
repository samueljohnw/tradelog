<div class="columns">
  <div class="column">
  <a href="#" class="button is-primary is-small updateTradeModal" data-target="updateTradeModal{{$trade->id}}" data-id="{{$trade->id}}">Update Trade</a>
  </div>
  <div class="column">
  <a href="#" class="button is-primary is-small newImageModal" data-target="newImageModal{{$trade->id}}" data-id="{{$trade->id}}">Upload New Image</a>
  </div>
</div>
<div class="columns">
  <div class="column">
    <h1 class="subtitle is-1">{{$trade->symbol}}</h1>
  </div>
  <div class="column">
    <p class="tag is-light is-pulled-right is-status-{{$trade->status}}">
      {{ucfirst($trade->status)}}
    </p>
  </div>
</div>

  <div class="columns">
    <div class="column is-desc is-one-third">Type:</div>
    <div class="column is-value">{{ucfirst($trade->position)}}</div>
  </div>
  <div class="columns">
    <div class="column is-desc is-one-third">Supply Distal:</div>
    <div class="column is-value">{{$trade->supplyDistal}}</div>
  </div>
  <div class="columns">
    <div class="column is-desc is-one-third">Supply Proximal:</div>
    <div class="column is-value">{{$trade->supplyProximal}}</div>
  </div>
  <div class="columns">
    <div class="column is-desc is-one-third">Demand Proximal:</div>
    <div class="column is-value">{{$trade->demandProximal}}</div>
  </div>
  <div class="columns">
    <div class="column is-desc is-one-third">Demand Distal:</div>
    <div class="column is-value">{{$trade->demandDistal}}</div>
  </div>
  <div class="columns">
    <div class="column is-desc is-one-third">Supply Curve:</div>
    <div class="column is-value">{{$trade->supplyCurve}}</div>
  </div>
  <div class="columns">
    <div class="column is-desc is-one-third">Demand Curve:</div>
    <div class="column is-value">{{$trade->demandCurve}}</div>
  </div>
  <div class="columns">
    <div class="column is-desc is-one-third">Current Price at Trade:</div>
    <div class="column is-value">{{$trade->currentPrice}}</div>
  </div>
  <div class="columns">
    <div class="column is-desc is-one-third">Traded At:</div>
    <div class="column is-value">{{$trade->datetime()}}</div>
  </div>

    @include('trade.delete')
    @include('trade.update')
    @include('trade.image')
