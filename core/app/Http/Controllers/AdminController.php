<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;

class AdminController extends Controller
{
    public function show($page){
      if (Auth::check() && Auth::user()->role == 'Admin'){
        $page = strval('admin.' . $page);
        return view($page);
      } else {
        return redirect('index');
      }
    }


    public function edituser($id){
      if (Auth::check() && Auth::user()->role == 'Admin'){
        return "Editing $id's profile";
    } else {
        return redirect('index');
      }
    }

}
