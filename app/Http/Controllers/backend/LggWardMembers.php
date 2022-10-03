<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\LggWardMember;
use App\Models\LggWardsList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class LggWardMembers extends Controller
{
    public function getWardsMembers()
    {
        return view('backend.lgg-ward-members', 
                [
                    'wardMembers' => LggWardMember::join('lgg_wards_list', 'lgg_wards_list.id', '=', 'lgg_ward_members.wardId')->get(
                [
                    'lgg_ward_members.*',
                    'lgg_wards_list.id as lgg_ward_id',
                    'lgg_wards_list.ward_title as lgg_ward_title'
                ]), 'wards' => LggWardsList::where('ward_status', 'active')->orderBy('id', 'DESC')->get()]);
    }

    public function addWardsMember(Request $request)
    {
        $request->validate([
            // 'title' => 'required',
            // 'wardId'=>'required',
            // 'name' => 'required',
            // 'party' => 'required',
            // 'landline'=>'required',
            // 'mobile'=>'required',
            // 'email' => 'required',
            // 'twitter'=>'required',
            'status' => 'required',
            'profile' => 'required|mimes:png,jpg,jpeg',

        ]);
        $member = new LggWardMember();
        if ($request->hasFile('profile')) {
            $profile = 'member-' . rand(1, 999999) . '-' . time() . '-' . $request->file('profile')->getClientOriginalName();
            $request->file('profile')->move(public_path() . '/uploads/', $profile);
            $member->profile = $profile;
        }
        $member->title = $request->input('title');
        $member->wardId = $request->input('wardId');
        $member->name = $request->input('name');
        $member->party = $request->input('party');
        $member->landline = $request->input('landline');
        $member->mobile = $request->input('mobile');
        $member->email = $request->input('email');
        $member->twitter = $request->input('twitter');
        $member->status = $request->input('status');

        if ($member->save()) {
            $request->session()->flash('success', 'New Ward Member Added Successfully');
            return redirect()->route('lggWardsMembers.getWardsMembers');
        }
        $request->session()->flash('error', 'Something went wrong');
        return redirect()->route('lggWardsMembers.getWardsMembers');
    }




    public function manageWardsMembers($id, $action)
    {
        if ($action === 'delete') {
            $member = LggWardMember::find($id);
            if ($member->profile !== '') {
                $imgPath = public_path('/uploads/' . $member->profile);
                if (File::exists($imgPath)) {
                    unlink($imgPath);
                }
            }
            if ($member->delete()) {
                Session::flash('success', 'Member Deleted Successfully');
                return redirect()->route('lggWardsMembers.getWardsMembers');
            } else {
                Session::flash('error', 'Something went wrong');
                return redirect()->route('lggWardsMembers.getWardsMembers');
            }
        }
        if ($action === 'edit') {
            $member = LggWardMember::where('lgg_ward_members.id',$id)->join('lgg_wards_list', 'lgg_wards_list.id', '=', 'lgg_ward_members.wardId')->get(
                [
                    'lgg_ward_members.id as memberId',
                    'lgg_ward_members.title',
                    'lgg_ward_members.name',
                    'lgg_ward_members.email',
                    'lgg_ward_members.landline',
                    'lgg_ward_members.status',
                    'lgg_ward_members.party',
                    'lgg_ward_members.mobile',
                    'lgg_ward_members.profile',
                    'lgg_ward_members.twitter',
                    'lgg_ward_members.wardId',
                    'lgg_wards_list.id as lgg_ward_id',
                    'lgg_wards_list.ward_title as lgg_ward_title'
                ]
            );
        //    dd($member);
            return view('backend.edit-lgg-ward-member', ['member' => $member, 'wards' => LggWardsList::where('ward_status', 'active')->orderBy('id', 'DESC')->get()]);
        }
    }




    public function updateWardsMember(Request $request){
        $request->validate([
            // 'title' => 'required',
            // 'wardId'=>'required',
            // 'name' => 'required',
            // 'party' => 'required',
            // 'landline'=>'required',
            // 'mobile'=>'required',
            // 'email' => 'required',
            // 'twitter'=>'required',
            'status' => 'required',
            'profile' => $request->hasFile('profile') ? 'mimes:png,jpg,jpeg'  :'',

        ]);

        $member = LggWardMember::find($request->input('id'));
        if ($request->hasFile('profile')) {
            if ($member->profile !== '') {
                $imagePath = public_path('/uploads/' . $member->profile);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $profile = 'member-' . rand(1, 999999) . '-' . time() . '-' . $request->file('profile')->getClientOriginalName();
            $request->file('profile')->move(public_path() . '/uploads/', $profile);
            $member->profile = $profile;
        }

        $member->title = $request->input('title');
        $member->wardId = $request->input('wardId');
        $member->name = $request->input('name');
        $member->party = $request->input('party');
        $member->landline = $request->input('landline');
        $member->mobile = $request->input('mobile');
        $member->email = $request->input('email');
        $member->twitter = $request->input('twitter');
        $member->status = $request->input('status');

        if ($member->update()) {
            $request->session()->flash('success', 'Ward Member Updated Successfully');
            return redirect()->route('lggWardsMembers.getWardsMembers');
        }
        $request->session()->flash('error', 'Something went wrong');
        return redirect()->route('lggWardsMembers.getWardsMembers');

    }
}
