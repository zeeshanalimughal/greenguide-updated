<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LondonBorough;
use App\Models\LondonBoroughCommingSoon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommingSoon extends Controller
{
    public function __construct()
    {
    }

    public function getRedbridgePage()
    {
        return view('frontend.comming-soon-pages.redbridge');
    }
    public function getMertongePage()
    {
        return view('frontend.comming-soon-pages.merton');
    }
    public function getLewishamPage()
    {
        return view('frontend.comming-soon-pages.lewisham');
    }
    public function getHaveringPage()
    {
        return view('frontend.comming-soon-pages.havering');
    }
    public function getEnfieldPage()
    {
        return view('frontend.comming-soon-pages.enfield');
    }
    public function getBromleyPage()
    {
        return view('frontend.comming-soon-pages.bromley');
    }
    public function getAlbansPage()
    {
        return view('frontend.comming-soon-pages.albans');
    }

    public function londonBoroughCommingSoonFrom(LondonBoroughCommingSoon $model, LondonBorough $request)
    {
        if ($request->validated()) {
            $res = $model->saveCommingSoonForm($request->all());
            if ($res) {
                $request->session()->flash('success', 'Thank you for sending your message, we will contact you soon');
                return redirect()->back();
            } else {
                $request->session()->flash('error', 'Something went wrong');
                return redirect()->back();
            }
        }
    }

    public function getAllCommingSoonMessages(LondonBoroughCommingSoon $model)
    {
        return view('backend.london-borough-commingsoon-submitions', ['commingSoonMessages' => $model->getCommingSoonMessages()]);
    }
    public function manageCommingSoonMessages(LondonBoroughCommingSoon $model,$action,$id)
    {
        if ($model->manageMessage($action,$id)) {
            Session()->flash('success', 'Message Deleted Successfully');
            return redirect()->route('commingSoon.getAllCommingSoonMessages');
        } else {
            Session()->flash('error', 'Something went wrong');
            return redirect()->route('commingSoon.getAllCommingSoonMessages');
        }
    }
}
