<div class="modal edit-modal newImageModal{{$trade->id}}">
  <div class="modal-background"></div>
  <div class="modal-content">
    <form method="POST" action="{{route('image.store')}}" enctype="multipart/form-data">
      {{csrf_field()}}
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
      <input name="trade_id" type="hidden" value="{{$trade->id}}">
      <footer class="modal-card-foot">
        <button class="button is-primary" type="submit">UPDATE</button>
        <span class="button button-close">Cancel</span>
      </footer>
    </form>
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>
