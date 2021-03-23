<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resume;
class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::all();
        return response()->json($resumes);
    }
}
