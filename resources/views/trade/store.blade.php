

<div  class="modal logTradeModal">
  <div class="modal-background"></div>
  <div class="modal-content">
    @if(request()->input('test') == true)
      <span href="" class="tag is-danger">This Is A Test Trade</span><br/>
    @endif
    <div class="columns">
      <div class="column">
        Risk -> <span id="risk"></span>
      </div>
      <div class="column">
        Reward -> <span id="reward"></span>
      </div>
    </div>

    <form method="POST" action="{{route('trade.store')}}" autocomplete="off" enctype="multipart/form-data">
      {{ csrf_field()}}
      <div class="field is-horizontal">
        <div class="field-label is-small">
          <label class="label">Symbol</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input class="symbol input" autofocus type="text" name="symbol" >
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small">
          <label class="label">Type</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
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
              <input class="entry input" type="text" name="entry" >
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
              <input class="exit input" type="text" name="exit" >
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
              <input class="stop input" type="text" name="stop" >
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

      <input class="checkbox" type="hidden" name="test" value="{{(request()->input('test') == true ? 'on' : '')}}" >

      <div class="field">
        <label class="label">Image Title</label>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input name="title"  class="input" type="text" placeholder="Image Title (Curve, Zone, etc)">
            </div>
          </div>
        </div>
      </div>
      <div class="field">
        <div class="file">
          <label class="file-label">
            <input class="file-input" name="image" type="file">
            <span class="file-cta">
              <span class="file-icon">
                <i class="fa fa-upload"></i>
              </span>
              <span class="file-label">
                Choose a file…
              </span>
            </span>
          </label>
        </div>
      </div>




  <button class="button is-primary" type="submit">Log Trade</button>
  </form>

  <button class="modal-close is-large" aria-label="close"></button>
  </div>
</div>
