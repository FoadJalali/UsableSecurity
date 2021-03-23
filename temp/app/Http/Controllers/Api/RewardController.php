<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reward;

class RewardController extends Controller
{
    public function index()
    {
        $rewards = Reward::all();
        return response()->json($rewards);
    }
}
