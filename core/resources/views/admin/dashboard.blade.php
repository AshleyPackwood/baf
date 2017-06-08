@extends('layouts.admin')
@section('title', 'Admin - Dashboard')

@section('body')

<div style="padding: 100px;" class="row">
  <div class="container">
    <div class="col s12 l6">
      <div class="collection">
        <a href="applications" style="width:100%;" class="btn"><i class="material-icons left">dvr</i> <span class="new badge white-text transparent">

        </span>Applications</a>
      </div>

    </div>
    <div class="col s12 l6">
      <div class="collection">
        <a href="users" style="width:100%;" class="btn"><i class="material-icons left">supervisor_account</i> <span class="new badge white-text transparent">
          @php
            $users = DB::table('users')->count();
            echo $users;
          @endphp
        </span> Users</a>
      </div>
    </div>
  </div>
</div>

@endsection
