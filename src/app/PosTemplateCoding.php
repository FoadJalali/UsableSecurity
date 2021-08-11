<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PosTemplateCoding extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'Pos_Template';


    public function companyPositions()
    {
    	return $this->hasMany('App/CompanyPosition', 'Pos_Code');
    }
}
