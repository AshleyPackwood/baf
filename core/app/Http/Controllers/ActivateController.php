<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \DB;
use \Auth;

class ActivateController extends Controller
{
    public function activate($token){
      if (DB::table('users')->where('activation_token', $token)->update(['activated' => 1])){
        return redirect('login');
    } else {
      return "Token not accepted.";
    }

  }
}
