<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\pages\GreenInitiative as PagesGreenInitiative;
use App\Models\pages\LinksCard;
use Illuminate\Http\Request;

class GreenInitiative extends Controller
{
    function index(){
        $page = PagesGreenInitiative::where('id', 1)->get();
    return view('frontend.greeninitiative', compact('page'),['links'=>LinksCard::where('id',1)->get()]);
    }
}
