@extends('template.full')
@section('content')
<div class="columns is-mobile">
  <div class="column is-half is-offset-one-quarter">

    <form  method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <div class="field">
      <label class="label">E-Mail Address</label>
      <div class="control">
        <input class="input" type="email" name="email" value="{{ old('email') }}" required autofocus>
      </div>
      @if ($errors->has('email'))
        <p>{{ $errors->first('email') }}</p>
      @endif
    </div>


    <div class="field">
      <label class="label">Password</label>
      <div class="control">
        <input class="input" type="password" name="password" required>
      </div>
      @if ($errors->has('password'))
        <p>{{ $errors->first('password') }}</p>
      @endif
    </div>

    <label class="checkbox">
      Remember me
      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
    </label>
    <div class="field">
      <button class="button is-primary" type="submit">Login</button>
    </div>

    </form>
  </div>
</div>
@stop
