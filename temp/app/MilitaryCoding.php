<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MilitaryCoding extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'MILITARY_CODE';


    public function personals()
    {
    	return $this->hasMany('App/Personal');
    }
}
