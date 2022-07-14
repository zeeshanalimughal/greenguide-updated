<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AdminEvents extends Controller
{
    public function index(){
        // $events = array();
        // $data = User::with(['userDetails','userEvents'])->get();
        // for($i=0;$i<sizeof($ev);$i++){
            //     foreach($ev[$i]['userEvents'] as $user){
                //        print_r($user);
                //     }
                // }
                // for($i=0;$i<sizeof($data);$i++){
                //     array_push($events,$data[$i]['userEvents']);
                // }

                $events = Event::all();
        return view('backend.events',['events' => $events]);
    }


    public function activateEvent($id, $action){


        if($action=='activate'){
            if(Event::where('id',$id)->update(['event_status'=>'live',])){
                Session::flash('success',"Event activated Successfully");
                return redirect('/admins/events');
            }else{
                Session::flash('error',"Something went wrong");
                return redirect('/admins/events');

            }
        }

        if($action=='deactivate'){
            if(Event::where('id',$id)->update(['event_status'=>'pending',])){
                Session::flash('success',"Event deactivated Successfully");
                return redirect('/admins/events');

            }else{
                Session::flash('error',"Something went wrong");
                return redirect('/admins/events');

            }
        }


        if($action=='reject'){
            if(Event::where('id',$id)->update(['event_status'=>'rejected',])){
                Session::flash('success',"Event Rejected Successfully");
                return redirect('/admins/events');

            }else{
                Session::flash('error',"Something went wrong");
                return redirect('/admins/events');

            }
        }


        if($action=='accept'){
            if(Event::where('id',$id)->update(['event_status'=>'pending',])){
                Session::flash('success',"Event Accepted Successfully, You Can Activate Now");
                return redirect('/admins/events');

            }else{
                Session::flash('error',"Something went wrong");
                return redirect('/admins/events');

            }
        }



        if($action=='remove'){

            $event = Event::where('id',$id)->get();
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

            if(Event::where('id',$id)->delete()){
                Session::flash('success',"Event Deleted Successfully");
                return redirect('/admins/events');

            }else{
                Session::flash('error',"Something went wrong");
                return redirect('/admins/events');
            }
        }
        Session::flash('error', 'Something went wrong');
        return redirect('/admins/events');
    }


    public function viewEvent($id){
        $event = Event::where('id',$id)->get();
        if(sizeof($event->toArray())>0){
            $user = User::where('id',$event[0]->userId)->get();
            return view('frontend.event-preview-by-admin',['event'=>$event,'user'=>$user]);
        }else{
            return redirect('/localevents');
        }
    }




    function addNewEvent(Request $request){
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
        $event->userId = 0;
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
            return redirect('admins/events');
        }else{
            Session::flash('error', 'Something went wrong');
            return redirect('admins/events');
        }
    }

}
