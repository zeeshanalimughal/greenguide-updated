<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\General_Setting;
use App\Models\LatestIssue;
use App\Models\LggWardMember;
use App\Models\LggWardsList;
use App\Models\pages\Archive;
use App\Models\pages\LinksCard;
use App\Models\UpcommingIssues;
use Illuminate\Http\Request;

class LggWardMembers extends Controller
{
    public function getAllMembers()
    {
        $members = LggWardMember::join('lgg_wards_list', 'lgg_wards_list.id', '=', 'lgg_ward_members.wardId')->where('lgg_wards_list.ward_status', 'active')->get(
            [
                'lgg_ward_members.*',
                'lgg_wards_list.id as lgg_ward_id',
                'lgg_wards_list.ward_title as lgg_ward_title'
            ]
        );
        $cabbinet_members = $members->filter(function ($member, $key) {
            return $member->party === "Conservative";
        });
        $shadow_cabbinet_members = $members->filter(function ($member, $key) {
            return $member->party === "Labour";
        });

        $other_members = $members->filter(function ($member, $key) {
            return $member->party !== "Conservative" && $member->party !== "Labour";
        });

        $addiscombe_east_members = $members->filter(function ($member, $key) {
            return $member->twitter === "@Jeet_Bains" || $member->twitter === "@MinsuR";
        });

        return view('frontend.ward-members', ['cabbinet_members' => $cabbinet_members, 'shadow_cabbinet_members' => $shadow_cabbinet_members, 'other_members' => $other_members, 'addiscombe_east_members' => $addiscombe_east_members]);
    }





    public function getAllWardsList()
    {
        return view('frontend.crydon-wards-list', ['wardsList' => LggWardsList::where('ward_status', 'active')->whereNotIn('id', [30, 31])->get(),'links'=>LinksCard::all()]);
    }

    public function getWardMembersByWardId($id)
    {
        $members = LggWardMember::where('lgg_ward_members.wardId', $id)->join('lgg_wards_list', 'lgg_wards_list.id', '=', 'lgg_ward_members.wardId')->where('lgg_wards_list.ward_status', 'active')->get(
            [
                'lgg_ward_members.*',
                'lgg_wards_list.id as lgg_ward_id',
                'lgg_wards_list.ward_title as lgg_ward_title'
            ]
        );
        return view('frontend.show-members-by-ward',['members' => $members,'links'=>LinksCard::all()]);
    }


    public function getCrydonDeliveryPage(){
        return view('frontend.croydon-delivery',['issues' => UpcommingIssues::all(), 'links' => LinksCard::where('id', 1)->get(), 'settings' => General_Setting::first()->get(['ui_heading_one', 'ui_heading_two', 'ui_heading_three']), 'page' => Archive::find(1),'latestIssues'=>LatestIssue::all()]);
    }
}
