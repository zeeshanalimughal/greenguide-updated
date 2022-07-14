<?php

namespace App\Http\Controllers\backend;

use App\Models\Feedback as ModelsFeedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Feedback extends Controller
{
    public function getAllFeedbacks(){
        return view('backend.feedbacks',['feedbacks'=>ModelsFeedback::orderBy('id','DESC')->get()]);
    }
    public function manageFeedback($id,$action){
        if($action === 'delete'){
            if(ModelsFeedback::find($id)->delete()){
                Session::flash('success', 'Feedback deleted');
                return redirect('admins/feedbacks');
            }
            Session::flash('error', 'Something went wrong');
            return redirect('admins/feedbacks');

        }
    }
}
