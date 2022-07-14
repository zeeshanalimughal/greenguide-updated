<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\UpcommingIssues as ModelsUpcommingIssues;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class UpcommingIssues extends Controller
{
    public function index(){
        return view('backend.upcomming-issues',['issues' => ModelsUpcommingIssues::all()]);
    }

    public function addIssue(Request $request)
    {
        $request->validate([
            'issue'=>'required',
            'deadline'=>'required',
            'commencement'=>'required',
        ]);
        if(ModelsUpcommingIssues::create([
            'issue'=>$request->issue,
            'deadline'=>Carbon::parse($request->deadline)->isoFormat('Do MMM YYYY'),
            'commencement'=>Carbon::parse($request->commencement)->isoFormat('Do MMM YYYY'),
        ])){
            $request->session()->flash('success', 'New Upcomming Issue Added Successfully');
            return redirect('admins/upcomming-issues');
        }
        $request->session()->flash('error', 'Something went wrong');
        return redirect('admins/upcomming-issues');
    }


    
    public function issueAction($id, $action)
    {
        if ($action === 'delete') {
            if (ModelsUpcommingIssues::where('id', $id)->delete()) {
                Session::flash('success', 'Issues Deleted Successfully');
                return redirect('admins/upcomming-issues');
            }else{
                Session::flash('error', 'Something went wrong');
                return redirect('admins/upcomming-issues');
            }
        }
        if ($action === 'edit') {
            return view('backend.edit-upcomming-issue',['issue'=>ModelsUpcommingIssues::find($id)]);
        }
    }


    public function issueUpdate(Request $request){
        $request->validate([
            'issue'=>'required',
            'deadline'=>'required',
            'commencement'=>'required',
        ]);
        if(ModelsUpcommingIssues::where('id',$request->id)
        ->update([
            'issue'=> $request->issue,
            'deadline'=> $request->deadline,
            'commencement'=> $request->commencement,
        ])){
            $request->session()->flash('success', 'Updated Successfully');
            return redirect('admins/upcomming-issues');
        }
        $request->session()->flash('error', 'Something went wrong');
        return redirect('admins/upcomming-issues');
    }

}
