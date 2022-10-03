<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\LggWardMember;
use Illuminate\Http\Request;

class LggWardMembers extends Controller
{
    public function getAllMembers(){
        // $croydon_cabinet_cembers = LggWardMember::where('')
        return view('frontend.ward-members');
    }
}
