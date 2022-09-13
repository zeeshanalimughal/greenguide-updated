<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\General_Setting;
use App\Models\LatestIssue;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class LatestIssues extends Controller
{
    public function index(){
        return view('backend.latest-issues',['issues' => LatestIssue::all(),'settings' => General_Setting::first()->get(['ui_heading_one','ui_heading_two','ui_heading_three'])]);
    }

    public function addIssue(Request $request)
    {
        $request->validate([
            'issue'=>'required',
            'deadline'=>'required',
            'commencement'=>'required',
        ]);
        if(LatestIssue::create([
            'issue'=>$request->issue,
            'deadline'=>Carbon::parse($request->deadline)->isoFormat('Do MMM YYYY'),
            'commencement'=>Carbon::parse($request->commencement)->isoFormat('Do MMM YYYY'),
        ])){
            $request->session()->flash('success', 'New Upcomming Issue Added Successfully');
            return redirect('admins/latest-issues');
        }
        $request->session()->flash('error', 'Something went wrong');
        return redirect('admins/latest-issues');
    }


    
    public function issueAction($id, $action)
    {
        if ($action === 'delete') {
            if (LatestIssue::where('id', $id)->delete()) {
                Session::flash('success', 'Issues Deleted Successfully');
                return redirect('admins/latest-issues');
            }else{
                Session::flash('error', 'Something went wrong');
                return redirect('admins/latest-issues');
            }
        }
        if ($action === 'edit') {
            return view('backend.edit-latest-issue',['issue'=>LatestIssue::find($id)]);
        }
    }


    public function issueUpdate(Request $request){
        $request->validate([
            'issue'=>'required',
            'deadline'=>'required',
            'commencement'=>'required',
        ]);
        if(LatestIssue::where('id',$request->id)
        ->update([
            'issue'=> $request->issue,
            'deadline'=> $request->deadline,
            'commencement'=> $request->commencement,
        ])){
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('admins/latest-issues');
        }
        $request->session()->flash('error', 'Something went wrong');
        return redirect('admins/latest-issues');
    }

    public function updateHeadings(Request $request){
        $request->validate([
            'ui_heading_one'=>'required',
            'ui_heading_two'=>'required',
            'ui_heading_three'=>'required',
        ]);
        if(General_Setting::first()
        ->update([
            'ui_heading_one'=> $request->ui_heading_one,
            'ui_heading_two'=> $request->ui_heading_two,
            'ui_heading_three'=> $request->ui_heading_three,
        ])){
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('admins/latest-issues');
        }
        $request->session()->flash('error', 'Something went wrong');
        return redirect('admins/latest-issues');
    }

} 
