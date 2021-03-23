<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $hidden = ['id', 'created_at', 'updated_at'];
    public function companyCoding()
    {
    	return $this->belongsTo('App\CompanyCoding', 'CompanyCode');
    }

    public function jobInformation()
    {
    	return $this->belongsTo('App\Job', 'emp_code');
    }

    public function companyPosition()
    {
    	return $this->belongsTo('App\CompanyPosition', 'Pos_Code');
    }
}
