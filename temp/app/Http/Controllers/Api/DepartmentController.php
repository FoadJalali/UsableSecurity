<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyDepartment;

class DepartmentController extends Controller
{
    public function index(){
        $departments = CompanyDepartment::all();
        return response()->json($departments);
    }
}
