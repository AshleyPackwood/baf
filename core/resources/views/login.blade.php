@extends('layouts.main')
@section('title', 'Login')

@section('body')
@if (session('message'))
  <h4>{{session('message')}}</h4>
@endif

<div class="row">
  <div class="col s12 ">
    <div class="icon-block">
      <h2 class="center black-text"><i class="material-icons">perm_identity</i></h2>
      <h5 class="center">Login</h5>
      <div class="row">
        <form method="POST" action="login" class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input type="email" class="validate" name="email">
              <label >Email</label>
            </div>
            <div class="input-field col s6">
              <input type="password" class="validate" name="password">
              <label > Password</label>
            </div>
          </div>
          <input class="btn blue-grey lighten-3" name="login" type="submit" value="Login" />
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
        </div>
          <!-- <a href="request">Forgot password?</a> -->
    </div>
  </div>
</div>
@endsection
