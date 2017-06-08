<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \DB;

class PasswordController extends Controller
{

    public function request(){//Will send the user an email so that they can rset their password
      $email = $_POST['email'];
      $password_token = md5($email . time());
      DB::table('users')->where('email', $email)->update(['password' => $password_token]);
      mail($email,"Password reset request","
         Please use the below link to reset your password
         www.ashpack.website/BAF/reset/$password_token
    ");

    session()->flash('message', 'Password has been reset. Check ' . $email .' to continue');
    return redirect('login');

    }
    public function reset($password_token){//Will force log in the user, so that they can change their password
      $password = Hash::make($_POST['password']);
      DB::table('users')->where('password', $password_token)->update(['password' => $password]);
      
    }
}
