<div class="modal noteModal{{$trade->id}}" class="hidden">
  <div class="modal-background"></div>
  <div class="modal-content">

  <form method="POST" action="{{route('note.store')}}" >
    {{csrf_field()}}
    <div class="field">
      <label class="label">Add a Note</label>
      <div class="control">
        <textarea class="textarea" name="note" rows="2" cols="20"></textarea>
      </div>
    </div>
    <input type="hidden" name="trade_id" value="{{$trade->id}}">
    <button class="button is-primary" type="submit">Add Note</button>
  </form>
<br/>
  @foreach($trade->notes()->get() as $note)
  <article class="message">
    <div class="message-header">
      <small>{{date('F j g:i a', strtotime($note->created_at))}}</small>
    </div>
    <div class="message-body">
      {{$note->text}}
    </div>
  </article>
  @endforeach
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>
