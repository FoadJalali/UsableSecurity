<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Educational;

class EducationalController extends Controller
{
    public function index()
    {
        $educationals = Educational::all();
        return response()->json($educationals);
    }
}
