<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\General_Setting;
use App\Models\Giveaway;
use App\Models\pages\Feedback as PageFeedback;
use App\Models\pages\LinksCard;
use App\Models\pages\MagazineCompetition;
use App\Models\pages\MagazineGiveaway;
use App\Models\UpcommingIssues;
use App\Models\WebsiteForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Session;


// use Illuminate\Support\Facades\Request;


class ResidentsCorner extends Controller
{

    public function getMagazineCompetitionPage()
    {
        $page2 =  MagazineGiveaway::where('id', 1)->get();
        return view('frontend.magazine-competition', ['issues' => UpcommingIssues::all(),'links'=>LinksCard::where('id',1)->get(),'settings'=>General_Setting::first()->get(['ui_heading_one','ui_heading_two','ui_heading_three']),'page'=>MagazineCompetition::find(1),'form'=>WebsiteForm::where('link',FacadesRequest::path())->get(),'page2'=>$page2]);
    }
    public function getMagazineGiveawayPage()
    {
        return view('frontend.magazine-giveaway', ['issues' => UpcommingIssues::all(),'links'=>LinksCard::where('id',1)->get(),'page'=>MagazineGiveaway::find(1),'form'=>WebsiteForm::where('link',FacadesRequest::path())->get()]);
    }

    public function submitMagzineGiveaway(Request $request)
    {
        // dd($request->all());
        if ($request->validate([
            'upcomingIssue' => 'required',
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|unique:giveaways,email',
            'address' => 'required',
            'answer' => 'required',
        ])) {
            if (Giveaway::create($request->all())) {
                Session::flash('success', 'Your Form has been submitted successfully');
                return redirect('/magzine-giveaway#form');
            }
            Session::flash('error', 'Something went wrong');
            return redirect('/magzine-giveaway#form');
        }
    }



    public function getFeedbackPage()
    {
        return view('frontend.feedback',['links'=>LinksCard::where('id',1)->get(),'page'=>PageFeedback::find(1),'form'=>WebsiteForm::where('link',FacadesRequest::path())->get()]);
    }



    public function submitFeedback(Request $request)
    {
        if ($request->validate([
            'feedback' => 'required',
            'type' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
        ])) {
            if (Feedback::create($request->all())) {
                Session::flash('success', 'Feedback submitted successfully');
                return redirect('/feedback');
            }
            Session::flash('error', 'Something went wrong');
            return redirect('/feedback');
        }
    }
}
