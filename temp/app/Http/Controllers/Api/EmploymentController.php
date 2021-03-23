<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employment;

class EmploymentController extends Controller
{
    public function index()
    {
        $employments = Employment::all();
        return response()->json($employments);
    }
}
