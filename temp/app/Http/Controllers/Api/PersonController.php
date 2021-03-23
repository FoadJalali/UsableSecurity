<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Personal;
class PersonController extends Controller
{
    public function index()
    {
        $personals = Personal::all();
        return response()->json($personals);
    }
}
