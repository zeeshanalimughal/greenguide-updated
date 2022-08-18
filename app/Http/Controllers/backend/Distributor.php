<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Distributor as ModelsDistributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class Distributor extends Controller
{
    public function getAdminDistributorPage()
    {
        return view('backend.distributor', ['distributors' => ModelsDistributor::all()]);
    }

    public function addDistributorMember(Request $request)
    {

        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:1024',
            'name' => 'required',
            'email' => 'required|email|unique:greenguide_team,email',
            'position' => 'required',
            'message' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = time() . ' ' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path() . '/uploads/', $image);

            $distributor = new  ModelsDistributor();
            $distributor->image = $image;
            $distributor->name = $request->input('name');
            $distributor->email = $request->input('email');
            $distributor->position = $request->input('position');
            $distributor->message = $request->input('message');

            if ($distributor->save()) {
                $request->session()->flash('success', 'Distributor Added Successfully');
                return redirect('/admins/distributors');
            } else {
                $request->session()->flash('error', 'Something went wrong');
                return redirect('/admins/distributors');
            }
        }
    }


    public function manageDistributorMembert($id, $action)
    {
        if ($action === 'delete') {
            $imageName = ModelsDistributor::find($id);
            $imagePath = public_path('/uploads/' . $imageName->image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            if (ModelsDistributor::where('id', $id)->delete()) {
                Session::flash('success', 'Distributor Deleted Successfully');
                return redirect('admins/distributors');
            } else {
                Session::flash('error', 'Something went wrong');
                return redirect('admins/distributors');
            }
        }
        if ($action === 'edit') {
            $distributor = ModelsDistributor::find($id);
            return view('backend.edit-distributor', ['distributor' => $distributor]);
        }
    }



    public function updateDistributorMember(Request $request)
    {
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webp|max:1024',
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'message' => 'required',
        ]);

        $distributor = ModelsDistributor::find($request->input('id'));
        if ($request->hasFile('image')) {
            $imagePath = public_path('/uploads/' . $distributor->image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $image = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path() . '/uploads/', $image);
            $distributor->image = $image;
        }

        $distributor->name = $request->input('name');
        $distributor->email = $request->input('email');
        $distributor->position = $request->input('position');
        $distributor->message = $request->input('message');

        if ($distributor->update()) {
            $request->session()->flash('success', 'Distributor Updated Successfully');
            return redirect('/admins/distributors');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/distributors');
        }
    }
}
