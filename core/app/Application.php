<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    public function isViewed()//Has the application been viewed
    {
        return static::where('viewed', 1)->get();
    }
    public function isAccepted()//Has the application been accepted
    {
        return static::where('accepted', 1)->get();
    }

}
