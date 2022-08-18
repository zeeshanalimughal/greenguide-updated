<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Distributor;
use App\Models\pages\About as PagesAbout;
use App\Models\pages\LinksCard;
use Illuminate\Http\Request;

class About extends Controller
{
    function index(){
        $page = PagesAbout::where('id', 1)->get();
        $links = LinksCard::where('id',1)->get();
        $distributors = Distributor::all();
        return view('frontend.about', compact('page','links','distributors'));
    }
}
