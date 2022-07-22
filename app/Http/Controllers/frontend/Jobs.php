<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Job;
use App\Models\pages\Jobs as PagesJobs;
use App\Models\pages\LinksCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class Jobs extends Controller
{
    function index()
    {
        $page = PagesJobs::where('id', 1)->get();
        return view('frontend.jobs', ['page' => $page, 'faqs' => Faq::all(),'links'=>LinksCard::where('id',1)->get()]);
    }

    public function submitJobRequest(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'email' => 'required|email|unique:jobs',
            'nationality' => 'required',
            'current_right_work_status' => 'required',
            'job_role'=>'required',
            'has_experience' => 'required',
            'has_driving_license' => 'required',
            'has_fork_lift_license' => $request->input('has_fork_lift_license') ? 'required' : '',
            'has_own_car' => $request->input('has_own_car') ? 'required' : '',
            'other_information' => 'required',
            'cv' => 'required|mimes:doc,pdf|max:5000',
        ]);


        $job = new Job();

        if($request->input('has_fork_lift_license')){
            $job->has_fork_lift_license = $request->input('has_fork_lift_license');
        }else{
            $job->has_fork_lift_license = 'Not given';
        }
        if($request->input('has_own_car')){
            $job->has_own_car = $request->input('has_own_car');
        }else{
            $job->has_own_car = 'Not given';
        }
        
        $job->fname = $request->input('fname');
        $job->lname = $request->input('lname');
        $job->dob = $request->input('dob');
        $job->gender = $request->input('gender');
        $job->phone = $request->input('phone');
        $job->address = $request->input('address');
        $job->city = $request->input('city');
        $job->zip = $request->input('zip');
        $job->email = $request->input('email');
        $job->nationality = $request->input('nationality');
        $job->current_right_work_status = $request->input('current_right_work_status');
        $job->has_experience = $request->input('has_experience');
        $job->has_driving_license = $request->input('has_driving_license');
        $job->job_role = $request->input('job_role');
        $job->other_information = $request->input('other_information');

        if ($request->hasFile('cv')) {
            $cv = time() . ' ' . $request->file('cv')->getClientOriginalName();
            $request->file('cv')->move(public_path() . '/uploads/', $cv);
            $job->cv = $cv;
        }

        if($job->save()){
            Session::flash('success', 'Job request created successfully');
            return redirect('/jobs#apply-job');
        }else{
            Session::flash('error', 'Something went wrong');
            return redirect('/jobs#apply-job');
        }
    }
}
