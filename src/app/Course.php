<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $hidden = ['id', 'created_at', 'updated_at'];
    public function companyCoding()
    {
    	return $this->belongsTo('App\companyCodings', 'CompanyCode');
    }

    public function jobInformation()
    {
    	return $this->belongsTo('App\Job', 'emp_code');
    }
}
