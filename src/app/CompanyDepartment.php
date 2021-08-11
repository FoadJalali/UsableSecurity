<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyDepartment extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'Dept_Code';
    protected $hidden = ['created_at', 'updated_at'];

    public function parent()
    {
        return $this->belongsTo('App\CompanyDepartment', 'Parent_Dept_Code');
    }

    public function companyCode()
    {
        return $this->belongsTo('App\CompanyCoding', 'CompanyCode');
    }

    public function deptLevel()
    {
        return $this->belongsTo('App\DeptLevelCoding', 'Dept_Level');
    }

    public function jobInformations()
    {
        return $this->hasManyThrough('App\Job', 'App\CompanyPosition', 'Pos_Code', 'emp_code');
    }
}
