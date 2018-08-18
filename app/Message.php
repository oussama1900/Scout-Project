<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{


    //
    protected $fillable = ['username','message'];
    public function  user(){
        return $this->belongsTo('App\User','scout_id','scout_id');
    }
    public function  scout(){
        return $this->belongsTo('App\Scout','scout_id','scout_id');
    }
	
	
	
	
	
	
}