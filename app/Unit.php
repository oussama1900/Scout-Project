<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = "units";
    protected $primaryKey = "unit_id";
    public $timestamps = false;
    protected $fillable = ['unit_id','unit_name'];


}
