<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\LggWardsList as ModelsLggWardsList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LggWardsList extends Controller
{
    public function getLggWardsList(){
        return view('backend.lgg-wards-list',['wards' => ModelsLggWardsList::all()]);
    }

    public function addLggWards(Request $request)
    {
        $request->validate([
            'ward_title'=>'required',
        ]);
        if(ModelsLggWardsList::create([
            'ward_title'=>$request->ward_title,
        ])){
            $request->session()->flash('success', 'New Ward Added Successfully');
            return redirect()->route('lggWardsList.getLggWardsList');
        }
        $request->session()->flash('error', 'Something went wrong');
        return redirect()->route('lggWardsList.getLggWardsList');
    }


    public function manageLggWardsList($id,$action){
        if ($action === 'delete') {
            if (ModelsLggWardsList::where('id', $id)->delete()) {
                Session::flash('success', 'Ward Deleted Successfully');
                return redirect()->route('lggWardsList.getLggWardsList');
            }else{
                Session::flash('error', 'Something went wrong');
                return redirect()->route('lggWardsList.getLggWardsList');
            }
        }
        if ($action === 'edit') {
            return view('backend.edit-lgg-ward',['ward'=>ModelsLggWardsList::find($id)]);
        }
    }



    public function updateLggWard(Request $request){
        $request->validate([
            'ward_title'=>'required',
        ]);
        if(ModelsLggWardsList::where('id',$request->id)
        ->update([
            'ward_title'=> $request->ward_title,
            'ward_status'=> $request->ward_status,
        ])){
            $request->session()->flash('success', 'Updated Successfully');
                            return redirect()->route('lggWardsList.getLggWardsList');

        }
        $request->session()->flash('error', 'Something went wrong');
                        return redirect()->route('lggWardsList.getLggWardsList');

    }


}
