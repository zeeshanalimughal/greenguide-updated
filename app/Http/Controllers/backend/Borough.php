<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Borough as ModelsBorough;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Borough extends Controller
{
    public function index(){
        return view('backend.borough',['boroughs'=>ModelsBorough::all()]);
    }
    public function addBorough(Request $request){
       if(ModelsBorough::create($request->all())){
        $request->session()->flash('success', 'New Borough Added Successfully');
        return redirect('admins/borough');
       }
       $request->session()->flash('error', 'Something went wrong');
       return redirect('admins/borough');
    }

    public function boroughAction($id,$action){
        if($action === 'delete'){
            if(ModelsBorough::find($id)->delete()){
                Session::flash('success', 'Borough Deleted Successfully');
                return redirect('admins/borough');
            }
            Session::flash('error', 'Something went wrong');
            return redirect('admins/borough');
        }
        if($action === 'activate'){
            if(ModelsBorough::find($id)->update(['status'=>'live'])){
                Session::flash('success', 'Borough Activated Successfully');
                return redirect('admins/borough');
            }
            Session::flash('error', 'Something went wrong');
            return redirect('admins/borough');
        }
        if($action === 'deactivate'){
            if(ModelsBorough::find($id)->update(['status'=>'pending'])){
                Session::flash('success', 'Borough Deactivated Successfully');
                return redirect('admins/borough');
            }
            Session::flash('error', 'Something went wrong');
            return redirect('admins/borough');
        }
    }
}
