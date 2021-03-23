<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyCoding extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'CompanyCode';


    public function companyDepartments()
    {
        return $this->hasMany('App\CompanyDepartment', 'Dept_Code');
    }

    public function companyPositions()
    {
        return $this->hasMany('App\CompanyPosition', 'Pos_Code');
    }

    public function courseInformation()
    {
        return $this->hasMany('App\Course');
    }

    public function educationalInformations()
    {
    	return $this->hasMany('App\Educational');
    }

    public function employmentInformations()
    {
        return $this->hasMany('App\Employment');
    }

    public function personalInformation()
    {
        return $this->hasOne('App\Personal');
    }

    public function rewardInformation()
    {
        return $this->hasMany('App\Reward');
    }

    public function resumeInformations()
    {
        return $this->hasMany('App\Resume');
    }

    public function jobInformations()
    {
        return $this->hasMany('App\Job', 'emp_code');
    }
}
