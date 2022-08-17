<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GreenguideTeam as ModelsGreenguideTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class GreenguideTeam extends Controller
{
    public function getAdminTeamPage()
    {
        return view('backend.greenguide-team', ['teams' => ModelsGreenguideTeam::all()]);
    }

    public function addTeamMember(Request $request)
    {

        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:1024',
            'name' => 'required',
            'email' => 'required|email|unique:greenguide_team,email',
            'position' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = time() . ' ' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path() . '/uploads/', $image);

            $team = new  ModelsGreenguideTeam();
            $team->image = $image;
            $team->name = $request->input('name');
            $team->email = $request->input('email');
            $team->position = $request->input('position');

            if ($team->save()) {
                $request->session()->flash('success', 'Team Member Added Successfully');
                return redirect('/admins/teams');
            } else {
                $request->session()->flash('error', 'Something went wrong');
                return redirect('/admins/teams');
            }
        }
    }


    public function manageTeamMembert($id, $action)
    {
        if ($action === 'delete') {
            $imageName = ModelsGreenguideTeam::find($id);
            $imagePath = public_path('/uploads/' . $imageName->image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            if (ModelsGreenguideTeam::where('id', $id)->delete()) {
                Session::flash('success', 'Member Deleted Successfully');
                return redirect('admins/teams');
            } else {
                Session::flash('error', 'Something went wrong');
                return redirect('admins/teams');
            }
        }
        if ($action === 'edit') {
            $member = ModelsGreenguideTeam::find($id);
            return view('backend.edit-team-member', ['member' => $member]);
        }
    }



    public function updateTeamMember(Request $request)
    {
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,webp|max:1024',
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
        ]);

        $member = ModelsGreenguideTeam::find($request->input('id'));
        if ($request->hasFile('image')) {
            $imagePath = public_path('/uploads/' . $member->image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $image = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path() . '/uploads/', $image);
            $member->image = $image;
        }

        $member->name = $request->input('name');
        $member->email = $request->input('email');
        $member->position = $request->input('position');

        if ($member->update()) {
            $request->session()->flash('success', 'Team Member Updated Successfully');
            return redirect('/admins/teams');
        } else {
            $request->session()->flash('error', 'Something went wrong');
            return redirect('/admins/teams');
        }
    }
}
