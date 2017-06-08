<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () { return view('index'); });
Route::get('index', function () { return view('index'); });
Route::get('request', function () { return view('password.request'); });
Route::get('login', function () { if (! Auth::check()){ return view('login'); } else { return redirect('profile'); } });
Route::get('register', function () { if (! Auth::check()){ return view('register'); } else { return redirect('profile'); } });
Route::get('forums', function(){ return view('forums'); })->middleware('auth');
Route::get('application', function(){ return view('application'); })->middleware('auth');
Route::get('logout', function () { Auth::logout(); return redirect("index"); });

//Password
//Route::get('reset/{token}', function() { return view('password.reset'); } );
//Route::post('request', 'PasswordController@request');

//Admin panel
Route::get('adminpanel', function(){
  if (Auth::user()->role == 'Admin'){
    return view('adminpanel');
  } else {
    return redirect('profile');
  }
})->middleware('auth');

Route::get('admin/{dashboard}', 'AdminController@show');
Route::get('admin/{applications}', 'AdminController@show');
Route::get('admin/{users}', 'AdminController@show');
Route::get('admin/edituser/{id}', 'AdminController@edituser');

Route::get('activate/{token}', 'ActivateController@activate');
Route::post("register", "RegisterController@register");
Route::post("login", "LoginController@login");

//Contact
Route::post('contact', function(){
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  mail('ashpack@virginmedia.com', $subject, $message);
  mail($email, 'Do not reply', "Thank you for sending us an email. We'll be in touch shortly.");
  return redirect('index');
});
