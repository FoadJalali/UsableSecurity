<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeptLevelCoding extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'Dept_Level';

    public function companyDepartments()
    {
        return $this->hasMany('App\CompanyDepartment', 'Dept_Code');
    }
}
