<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyPosition;

class PositionController extends Controller
{
    public function index(){
        $positions = CompanyPosition::all();
        return response()->json($positions);
    }
}
