<div class="modal edit-modal addFuture">
  <div class="modal-background"></div>
  <div class="modal-content">

    <form class="" action="{{route('future.store')}}" method="post">
      {{csrf_field()}}
      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Symbol</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input type="text" class="input" name="symbol" value="">
            </div>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">increment</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input type="text" class="input" name="increment" value="">
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Value</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input type="text" class="input" name="value" value="">
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Format</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input type="text" class="input" name="format" value="">
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-small ">
          <label class="label">Months</label>
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <input type="text" class="input" name="months" value="">
            </div>
          </div>
        </div>
      </div>

      <button class="button is-primary" type="submit" name="button">Add Future</button>
      <span class="button button-close">Cancel</span>

    </form>

  </div>
</div>
