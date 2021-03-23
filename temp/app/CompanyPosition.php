<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyPosition extends Model
{
    // protected $fillable = ['Parent_Pos_Code'];
    public $incrementing = false;
    protected $primaryKey = 'Pos_Code';
    protected $hidden = ['created_at', 'updated_at'];

    public function parent()
    {
        return $this->belongsTo('App\CompanyPosition', 'Parent_Pos_Code');
    }
    public function posTemplate()
    {
    	return $this->belongsTo('App\PosTemplateCoding', 'Pos_Template');
    }

    public function resumeInformation()
    {
    	return $this->hasMany('App\Resume');
    }

    public function companycode()
    {
        return $this->belongsTo('App\CompanyCoding', 'CompanyCode');
    }
}
