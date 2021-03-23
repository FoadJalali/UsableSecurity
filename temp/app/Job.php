<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = ['emp_code'];
    public $incrementing = false;
    protected $primaryKey = 'emp_code';
    protected $hidden = ['created_at', 'updated_at'];

    
    public function educationalInformations()
    {
    	return $this->hasMany('App\Educational');
    }

    public function employmentInformations()
    {
    	return $this->hasMany('App\Employment');
    }

    public function courseInformations()
    {
    	return $this->hasMany('App\Course');
    }

    public function rewardInformations()
    {
    	return $this->hasMany('App\Reward');
    }

    public function resumeInformations()
    {
    	return $this->hasMany('App\Resume');
    }

    public function personalInformation()
    {
    	return $this->hasOne('App\Personal');
    }

    public function companyCoding()
    {
        return $this->hasOne('App\CompanyCoding', 'CompanyCode');
    }

}
