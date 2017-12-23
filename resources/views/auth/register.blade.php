@extends('template.full')

@section('content')

<div class="columns is-mobile">
  <div class="column is-half is-offset-one-quarter">

<form method="POST" action="{{ route('register') }}">
{{ csrf_field() }}


<div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input class="input" type="text" name="name" value="{{ old('name') }}" required autofocus>
  </div>
  @if ($errors->has('name'))
  <strong>{{ $errors->first('name') }}</strong>
  @endif
</div>

<div class="field">
  <label class="label">E-Mail Address</label>
  <div class="control">
    <input class="input" type="email" name="email" value="{{ old('email') }}" required>
  </div>
  @if ($errors->has('email'))
    <strong>{{ $errors->first('email') }}</strong>
  @endif
</div>

<div class="field">
  <label class="label">Password</label>
  <div class="control">
    <input class="input" type="password" name="password" required>
  </div>
</div>

<div class="field">
  <label class="label">Confirm Password</label>
  <div class="control">
    <input class="input" type="password" name="password_confirmation" required>
  </div>
  @if ($errors->has('password'))
  <strong>{{ $errors->first('password') }}</strong>
  @endif
</div>



<button type="submit" class="button">
Register
</button>

</form>
</div></div>
@endsection
