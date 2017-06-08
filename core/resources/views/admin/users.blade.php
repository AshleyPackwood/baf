@extends('layouts.admin')
@section('title', 'Admin - User')

@section('body')

@php
  $users = DB::table('users')->get();
@endphp
@foreach ($users as $user)
<div class="row">
   <div class="col s12">
       <div class="card-panel white">
         <span class="black-text">
         <h6> Username: {{$user->username}} </h6>
         <p> Email: {{$user->email}} </p>
         <p> Steam username: {{$user->steam_username}} </p>
         <p> Account type: {{$user->role}} </p>
         <a class="btn" href="edituser/{{$user->id}}"> Edit </a>
         </span>
       </div>

   </div>
 </div>
@endforeach

@endsection
