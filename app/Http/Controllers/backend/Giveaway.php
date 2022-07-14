<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Giveaway as ModelsGiveaway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Giveaway extends Controller
{
    public function getAllGiveAwayRequests(){
        $giveaways =  ModelsGiveaway::join('upcomming_issues', 'upcomming_issues.id', '=', 'giveaways.upcomingIssue')
        ->get([
            'giveaways.id',
            'giveaways.name',
            'giveaways.email',
            'giveaways.address',
            'giveaways.answer',
            'giveaways.created_at',
            'upcomming_issues.issue',
        ]);
        return view('backend.magzine-giveaway',['giveaways' => $giveaways]);
    }

    public function manageGiveaways($id, $action){
        if($action === 'delete'){
            if(ModelsGiveaway::find($id)->delete()){
                Session::flash('success', 'Giveaway deleted');
                return redirect('admins/giveaways');
            }
            Session::flash('error', 'Something went wrong');
            return redirect('admins/giveaways');

        }
    }
}
