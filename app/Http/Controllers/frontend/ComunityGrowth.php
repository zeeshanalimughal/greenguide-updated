<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\pages\CommunityGrowth;
use Illuminate\Http\Request;

class ComunityGrowth extends Controller
{
    function index()
    {
        $communitygrowth = CommunityGrowth::where('id', 1)->get();
        return view('frontend.comunitygrowth', compact('communitygrowth'));
    }
}
