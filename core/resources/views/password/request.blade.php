@extends('layouts.main')
@section('title', 'Password reset')

@section('body')

<div class="row">
  <div class="col s12 ">
    <div class="icon-block">
      <h2 class="center black-text"><i class="material-icons">lock</i></h2>
      <h5 class="center">Request a password reset</h5>
      <div class="row">
        <form method="POST" action="request" class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <input type="email" class="validate" name="email">
              <label >Email</label>
            </div>
          </div>
          <input class="btn blue-grey lighten-3" name="request" type="submit" value="Request" />
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
        </div>
    </div>
  </div>
</div>

@endsection
