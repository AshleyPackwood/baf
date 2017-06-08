<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use \Hash;
use \DB;

use App\Mail\Activation;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(Request $request){
      /*$this->validate($request, [
        'email' => 'required|max:60',
        'username' => 'required|max:60',
        'password' => 'required|max:60',
      ]);*/


      $email = $_POST['email'];
      $username = $_POST['username'];
      $steam_username = $_POST['steam_username'];
      $password = Hash::make($_POST['password']);
      $activation_token = md5(time());

      //

      if (DB::insert('insert into users (steam_username, username, email, password, activation_token) values (?, ?, ?, ?, ?)', [$steam_username, $username, $email, $password, $activation_token])){

        /*Mail::send('index', array('username' => $username, 'activation_token' => $activation_token), function($message){
          $message->to('ashpack@virginmedia.com');
        });*/

        mail($email,"Activate your account","
           Hi $username
           Please use the below link to activate your account
           www.ashpack.website/BAF/activate/$activation_token

      ");

        session()->flash('message', 'Your account has been made. Please check ' . $email . ' to activate.');


        return view('login');
      }


    }
}
