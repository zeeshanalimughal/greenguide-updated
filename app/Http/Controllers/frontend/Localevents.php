<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;


class Localevents extends Controller

{
    function index(){
        $ev = Event::where('event_status','live')->join('users','users.id','=','events.userId')->get([
            'events.*',
            'users.email'
        ]);
        foreach($ev as $key => $event){
            if($event->event_end_date < date('Y-m-d')){
                Event::where('id',$event->id)->update([
                    'event_status'=>'closed'
                ]);
            }
        }
        return view('frontend.localevents',['events'=>$ev]);
    }



    function eventDetails($id){
        $event = Event::where('id',$id)->where('event_status','live')->get();
        if(sizeof($event->toArray())>0){
            $user = User::where('id',$event[0]->userId)->get();
            return view('frontend.event-details',['event'=>$event,'user'=>$user]);
        }else{
            return redirect('/localevents');
        }
    }

    

    function addEventForm(){
        $user = UserDetails::where('userId',Auth::user()->id)
        ->first();
        return view('frontend.add-event-form',['user' => $user]);
    }
    
    function addEvent(Request $request){
        $request->validate([
            'event_title'=>'required',
            'event_category'=>'required',
            'event_date'=>'required',
            'event_time'=>'required',
            'event_start_date'=>'required',
            'event_end_date'=>'required',
            'event_location'=>'required',
            'event_website'=>'required',
            'event_description'=>'required',
            'event_main_image'=>'required|mimes:jpeg,png,jpg,gif,svg',
            'eventImages'=>'required',
        ]);

        $event = new Event();
        $event->userId =Auth::user()->id;
        $event->event_title = $request->input('event_title');
        $event->event_category = $request->input('event_category');
        $event->event_date = $request->input('event_date');
        $event->event_time = $request->input('event_time');
        $event->event_start_date = $request->input('event_start_date');
        $event->event_end_date = $request->input('event_end_date');
        $event->event_location = $request->input('event_location');
        $event->event_website = $request->input('event_website');
        $event->event_description = $request->input('event_description');

        if ($request->hasFile('event_main_image')) {
            $event_main_image = time() . ' ' . $request->file('event_main_image')->getClientOriginalName();
            $request->file('event_main_image')->move(public_path() . '/uploads/', $event_main_image);
            $event->event_main_image = $event_main_image;
        }
        
        $images = [];
        if ($request->eventImages){
            foreach($request->eventImages as $key => $image)
            {
                $imageName = rand(1,999).time().rand(1,999).'.'.$image->extension();  
                $image->move(public_path('uploads'), $imageName);
                $images[]['name'] = $imageName;
            }
        }
        $event->eventImages = $images;
    
        if($event->save()){
            Session::flash('success', 'Event Created successfully and it is under review');
            return redirect('/events/add-event-form');
        }else{
            Session::flash('error', 'Something went wrong');
            return redirect('/events/add-event-form');
        }
    }

    
    
    public function getUserEvents(){
        $events = Event::where('userId',Auth::user()->id)->get();
        return view('frontend.all-user-events',['events'=>$events]);
    }
    

    
    public function editEvent($id){
        $event = Event::where('id',$id)
        ->where('userId',Auth::user()->id)
        ->select(['id','event_description','event_title','event_category','event_date','event_time','event_start_date','event_end_date','event_status','event_location','event_website'])->get();
        return view('frontend.edit-event-form',['event'=>$event]);
    }
    
    
    
    function updateEvent(Request $request){
        $request->validate([
            'event_title'=>'required',
            'event_category'=>'required',
            'event_date'=>'required',
            'event_time'=>'required',
            'event_start_date'=>'required',
            'event_end_date'=>'required',
            'event_location'=>'required',
            'event_website'=>'required',
            'event_description'=>'required',
            // 'event_main_image'=>'required|mimes:jpeg,png,jpg,gif,svg',
            // 'eventImages'=>'required|mimes:jpeg,png,jpg,gif,svg',
        ]);
    

        $event =  Event::where('id',$request->input('eventId'))->first();

        $event->event_title= $request->input('event_title');
        $event->event_category= $request->input('event_category');
        $event->event_date= $request->input('event_date');
        $event->event_time= $request->input('event_time');
        $event->event_start_date= $request->input('event_start_date');
        $event->event_end_date= $request->input('event_end_date');
        $event->event_location= $request->input('event_location');
        $event->event_website= $request->input('event_website');
        $event->event_description= $request->input('event_description');
        $event->event_status= 'pending';
    
        
        if($event->update()){
            Session::flash('success', 'Event Details Updated successfully, It is under review');
            return redirect('/events/all-events');
        }else{
            Session::flash('error', 'Something went wrong');
            return redirect('/events/all-events');
        }
    }
    



    public function deleteEvent($id){
        
        $event = Event::where('id',$id)
        ->where('userId',Auth::user()->id)
        ->get();
        foreach($event[0]->eventImages as $name => $image){
           foreach ($image as $key => $img) {
             $imgPath =public_path('/uploads/' . $img);
             if (File::exists($imgPath)) {
                unlink($imgPath);
            }
           }
        }
        $imagePath = public_path('/uploads/' . $event[0]->event_main_image);
        if (File::exists($imagePath)) {
            unlink($imagePath);
        }

        if(Event::where('id',$id)
        ->where('userId',Auth::user()->id)
        ->delete()){
            Session::flash('success', 'Event Deleted Successfully');
            return redirect('/events/all-events');
        }else{
            Session::flash('error', 'Something went wrong');
            return redirect('/events/all-events');
        }
    }

}        

