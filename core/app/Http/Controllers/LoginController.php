<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use \Hash;
use \DB;
use \Auth;


class LoginController extends Controller
{
    public function login(){
      //$email = $_POST["email"];
      $email = $_POST["email"];
      $password = $_POST["password"];

      if (Auth::attempt(['email' => $email, 'password' => $password, 'activated' => 1])) {
        return redirect("profile");
      } else {
        return "Looks like something went wrong, please check that the username and password is correct or that you have activated your account";
      }


    }
}
