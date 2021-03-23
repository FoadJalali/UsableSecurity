<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    // protected $fillable = ['emp_code', 'sort_name', 'long_name', 'father_name', 'BIRTH_DT', 'CITY_DESC', 'MAHALSODOR', 'MELI_CODE', 'ID_NO1', 'SEX_CODE', 'MARITAL_CODE', 'MILITARY_CODE', 'Guardianship', 'Status' ];
    public $incrementing = false;
    protected $primaryKey = 'emp_code';
    protected $hidden = ['created_at', 'updated_at'];
    public function militaryCode()
    {
    	return $this->belongsTo('App\MilitaryCoding', 'MILITARY_CODE');
    }

    public function companyCoding()
    {
    	return $this->belongsTo('App\CompanyCoding', 'CompanyCode');
    }

    public function jobInformation()
    {
    	return $this->belongsTo('App\Job', 'emp_code');
    }
}
