<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educational extends Model
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
}
