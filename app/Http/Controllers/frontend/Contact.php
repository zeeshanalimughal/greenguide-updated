<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact as ModelsContact;
use App\Models\GreenguideTeam;
use App\Models\pages\Contact as PagesContact;
use Illuminate\Http\Request;

class Contact extends Controller
{
    function index()
    {
        $page = PagesContact::where('id', 1)->get();
        $teams =  GreenguideTeam::all();
        return view('frontend.contact', compact('page','teams'));
    }


    function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $message = ModelsContact::create($request->all());
        if($message){
            $request->session()->flash('success', 'Thank you for sending your message, we will contact you soon');
            return redirect('/contact');
        }
       else{
        $request->session()->flash('error', 'Something went wrong');
        return redirect('/contact');
       }
    }
}
