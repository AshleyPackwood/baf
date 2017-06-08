@extends('layouts.main')
@section('title', 'Register')

@section('body')

<div class="modal-content">
  <div class="row">
    <form method="POST" action="register" class="col s12">
    <div class="col s12 ">
      <div class="icon-block">
        <h2 class="center black-text"><i class="material-icons">person_add</i></h2>
        <h5 class="center">Register</h5>
        <div class="row">
        <div class="row">
          <div class="input-field col s12 l6">
            <input required type="text" class="validate" name="steam_username">
            <label >Steam username</label>
          </div>
          <div class="input-field col s12 l6">
            <input required type="text" class="validate" maxlength="50" name="username">
            <label> In-game username (Surname) </label>
          </div>
        </div>
      </div>
      <div class="row">
            <div class="row">
              <div class="input-field col s12 l6">
                <input required type="email" class="validate" name="email">
                <label for="email" data-error="Please enter a valid email address" data-success="right">Email</label>
                <label >Email</label>
              </div>
              <div class="input-field col s12 l6">
                <input required id="icon_telephone" type="password" class="validate" name="password">
                <label > Password</label>
              </div>
            </div>
            <input class="btn blue-grey lighten-3" type="submit" name="register" value="Register" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
